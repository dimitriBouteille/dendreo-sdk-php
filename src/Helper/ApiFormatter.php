<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Helper;

class ApiFormatter
{
    final public const DATE_FORMAT = 'Y-m-d';
    final public const DATE_TIME_FORMAT = 'Y-m-d H:i:s';

    /**
     * @param mixed $value
     * @param string $format
     * @throws \InvalidArgumentException
     * @return mixed
     */
    public static function format(mixed $value, string $format): mixed
    {
        if ($value === null) {
            return null;
        }

        if (in_array($format, ['date', 'datetime'], true)) {
            if (!$value instanceof \DateTime) {
                throw new \InvalidArgumentException('The value must be an \DateTime object.');
            }

            if ($format === 'date') {
                return $value->format(self::DATE_FORMAT);
            }

            return $value->format(self::DATE_TIME_FORMAT);
        }

        if ($format === 'int') {
            return (int) $value;
        }

        if ($format === 'float') {
            return (float) $value;
        }

        if (in_array($format, ['boolean', 'bool'], true)) {
            return (bool) $value ? '1' : '0';
        }

        if ($format === 'collection') {
            if (!is_array($value)) {
                throw new \InvalidArgumentException('The value must be an array.');
            }

            return implode(',', $value);
        }

        if ($format === 'string') {
            if (!is_string($value)) {
                throw new \InvalidArgumentException('The value must be a string.');
            }

            return $value;
        }

        throw new \InvalidArgumentException(sprintf('Invalid format: %s', $format));
    }
}
