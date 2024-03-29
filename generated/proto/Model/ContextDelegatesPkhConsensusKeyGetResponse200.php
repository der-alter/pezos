<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Model;

class ContextDelegatesPkhConsensusKeyGetResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    protected $active;
    /**
     * @var ContextDelegatesPkhConsensusKeyGetResponse200PendingsItem[]
     */
    protected $pendings;

    public function getActive()
    {
        return $this->active;
    }

    public function setActive($active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

        return $this;
    }

    /**
     * @return ContextDelegatesPkhConsensusKeyGetResponse200PendingsItem[]
     */
    public function getPendings(): array
    {
        return $this->pendings;
    }

    /**
     * @param ContextDelegatesPkhConsensusKeyGetResponse200PendingsItem[] $pendings
     */
    public function setPendings(array $pendings): self
    {
        $this->initialized['pendings'] = true;
        $this->pendings = $pendings;

        return $this;
    }
}
