<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Model;

class InjectionBlockPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $data;
    /**
     * @var Operation[][]
     */
    protected $operations;

    public function getData(): string
    {
        return $this->data;
    }

    public function setData(string $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * @return Operation[][]
     */
    public function getOperations(): array
    {
        return $this->operations;
    }

    /**
     * @param Operation[][] $operations
     */
    public function setOperations(array $operations): self
    {
        $this->initialized['operations'] = true;
        $this->operations = $operations;

        return $this;
    }
}
