<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersValidatorsGetResponse200Item extends \ArrayObject
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
     * @var int
     */
    protected $level;

    protected $delegate;
    /**
     * @var int[]
     */
    protected $slots;

    protected $consensusKey;

    public function getLevel(): int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->initialized['level'] = true;
        $this->level = $level;

        return $this;
    }

    public function getDelegate()
    {
        return $this->delegate;
    }

    public function setDelegate($delegate): self
    {
        $this->initialized['delegate'] = true;
        $this->delegate = $delegate;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getSlots(): array
    {
        return $this->slots;
    }

    /**
     * @param int[] $slots
     */
    public function setSlots(array $slots): self
    {
        $this->initialized['slots'] = true;
        $this->slots = $slots;

        return $this;
    }

    public function getConsensusKey()
    {
        return $this->consensusKey;
    }

    public function setConsensusKey($consensusKey): self
    {
        $this->initialized['consensusKey'] = true;
        $this->consensusKey = $consensusKey;

        return $this;
    }
}
