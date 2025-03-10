<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Model;

abstract class AbstractModel implements \JsonSerializable, \ArrayAccess
{
    /**
     * The properties that should be cast.
     *
     * @var array<string, string>
     */
    protected array $casts = [];

    /**
     * Associative array for storing property values
     *
     * @var array<string, mixed>
     */
    protected array $_data = [];

    public function __construct(array $data = [])
    {

    }

    public function jsonSerialize()
    {

    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->_data;
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
        $this->_data[$key] = $value;
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
        return $this->_data[$key] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function offsetExists($offset): bool
    {
        return isset($this->_data[$offset]);
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
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->_data[] = $value;
        } else {
            $this->set($offset, $value);
        }
    }

    /**
     * @inheritDoc
     */
    public function offsetUnset($offset): void
    {
        unset($this->_data[$offset]);
    }

    /**
     * @return string[]
     */
    public function getCasts(): array
    {
        return $this->casts;
    }
}
