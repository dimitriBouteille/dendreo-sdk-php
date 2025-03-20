<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Model;

use Dbout\DendreoSdk\Exception\DendreoException;
use Dbout\DendreoSdk\ObjectSerializer;

// @phpstan-ignore missingType.generics
abstract class AbstractModel implements \JsonSerializable, \ArrayAccess, \Stringable, ModelInterface
{
    /**
     * The properties that should be cast.
     *
     * @var array<string, string>
     */
    protected array $casts = [];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var array<string, mixed>
     */
    protected array $apiFormats = [];

    /**
     * Associative array for storing property values
     *
     * @var array<string, mixed>
     */
    protected array $data = [];

    /**
     * @param array<string, mixed> $data
     */
    public function __construct(
        array $data = []
    ) {
        $this->casts = array_merge($this->casts, $this->casts());
        $this->data = $data;
    }

    /**
     * @inheritDoc
     * @throws DendreoException
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return (new ObjectSerializer())->serialize($this);
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * Set a key value pair
     *
     * @param string $key
     * @param mixed $value
     * @return $this
     */
    public function set(string $key, mixed $value): self
    {
        $this->data[$key] = $value;
        return $this;
    }

    /**
     * Get a specific key value.
     *
     * @param string $key
     * @return mixed
     */
    public function get(string $key): mixed
    {
        return $this->data[$key] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function offsetExists($offset): bool
    {
        return isset($this->data[$offset]);
    }

    /**
     * @inheritDoc
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->get($offset);
    }

    /**
     * @inheritDoc
     * @throws \Exception
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            throw new \Exception('Offset must not be null');
        } else {
            $this->set($offset, $value);
        }
    }

    /**
     * @inheritDoc
     */
    public function offsetUnset($offset): void
    {
        unset($this->data[$offset]);
    }

    /**
     * @inheritDoc
     */
    public function getCasts(): array
    {
        return $this->casts;
    }

    /**
     * Get the properties that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getApiCasts(): array
    {
        return $this->apiFormats;
    }

    /**
     * @inheritDoc
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @inheritDoc
     * @throws DendreoException
     */
    public function __toString()
    {
        $result = json_encode($this->jsonSerialize(), JSON_PRETTY_PRINT);
        if (!is_string($result)) {
            throw new \ParseError(json_last_error_msg());
        }

        return $result;
    }
}
