<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk;

use Dbout\DendreoSdk\Helper\Formatter;

class ObjectSerializer
{
    /**
     * Serialize data
     *
     * @param mixed $data
     * @return scalar|object|array|null serialized form of $data
     */
    public function serialize(mixed $data): mixed
    {
        return [];
    }

    /**
     * Deserialize a JSON string into an object
     *
     * @template T
     *
     * @param mixed $data Object or primitive to be deserialized
     * @param class-string<T> $class Class name is passed as a string
     *
     * @throws \Exception
     * @return array|null|object a single or an array of $class instances
     */
    public function deserialize(mixed $data, string $class)
    {
        if (null === $data) {
            return null;
        }

        if (strcasecmp(substr($class, -2), '[]') === 0) {
            $data = is_string($data) ? json_decode($data) : $data;
            if (!is_array($data)) {
                throw new \InvalidArgumentException(sprintf('Invalid array %s', $class));
            }

            $subClass = substr($class, 0, -2);
            $values = [];
            foreach ($data as $value) {
                $values[] = $this->deserialize($value, $subClass);
            }

            return $values;
        }

        if (preg_match('/^(array<|map\[)/', $class)) { // for associative array e.g. array<string,int>
            $data = is_string($data) ? json_decode($data) : $data;
            settype($data, 'array');
            $inner = substr($class, 4, -1);
            $deserialized = [];
            if (strrpos($inner, ",") !== false) {
                $subClass_array = explode(',', $inner, 2);
                $subClass = $subClass_array[1];
                foreach ($data as $key => $value) {
                    $deserialized[$key] = $this->deserialize($value, $subClass);
                }
            }
            return $deserialized;
        }

        if ($class === 'object') {
            settype($data, 'array');
            return $data;
        } elseif ($class === 'mixed') {
            settype($data, gettype($data));
            return $data;
        }

        if ($class === '\DateTime') {
            // Some APIs return an invalid, empty string as a
            // date-time property. DateTime::__construct() will return
            // the current time for empty input which is probably not
            // what is meant. The invalid empty string is probably to
            // be interpreted as a missing field/value. Let's handle
            // this graceful.
            if (!empty($data)) {
                try {
                    return new \DateTime($data);
                } catch (\Exception) {
                    // Some APIs return a date-time with too high nanosecond
                    // precision for php's DateTime to handle.
                    // With provided regexp 6 digits of microseconds saved
                    $date = Formatter::sanitizeTimestamp($data);
                    return is_string($date) ? new \DateTime($date) : null;
                }
            } else {
                return null;
            }
        }

        /** @psalm-suppress ParadoxicalCondition */
        if (in_array($class, ['\DateTime', '\SplFileObject', 'array', 'bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], true)) {
            settype($data, $class);
            return $data;
        }

        if (method_exists($class, 'getAllowableEnumValues')) {
            if (!in_array($data, $class::getAllowableEnumValues(), true)) {
                $imploded = implode("', '", $class::getAllowableEnumValues());
                throw new \InvalidArgumentException("Invalid value for enum '$class', must be one of: '$imploded'");
            }
            return $data;
        }

        $data = is_string($data) ? json_decode($data) : $data;

        /** @var T $instance */
        $instance = new $class();
        if (!is_array($data)) {
            return $instance;
        }

        $casts = [];
        if (method_exists($instance, 'getCasts')) {
            $casts = $instance->getCasts();
        }

        foreach ($data as $key => $value) {
            $cast = $casts[$key] ?? null;
            if (is_string($cast) && $cast !== '') {
                $value = $this->deserialize($value, $cast);
            }

            if ($this->hasSetMutator($instance, $key)) {
                $setter = sprintf('set%s', Formatter::studly($key));
                $instance->$setter($value);
                continue;
            }

            $instance[$key] = $value;
        }

        return $instance;
    }

    /**
     * @param object $object
     * @param string $key
     * @return bool
     */
    protected function hasSetMutator(object $object, string $key): bool
    {
        return method_exists($object, 'set'.Formatter::studly($key));
    }
}
