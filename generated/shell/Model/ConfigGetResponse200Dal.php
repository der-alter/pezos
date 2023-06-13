<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Model;

class ConfigGetResponse200Dal extends \ArrayObject
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
     * @var bool
     */
    protected $activated;
    /**
     * @var mixed|null
     */
    protected $useMockSrsForTesting;

    public function getActivated(): bool
    {
        return $this->activated;
    }

    public function setActivated(bool $activated): self
    {
        $this->initialized['activated'] = true;
        $this->activated = $activated;

        return $this;
    }

    public function getUseMockSrsForTesting()
    {
        return $this->useMockSrsForTesting;
    }

    public function setUseMockSrsForTesting($useMockSrsForTesting): self
    {
        $this->initialized['useMockSrsForTesting'] = true;
        $this->useMockSrsForTesting = $useMockSrsForTesting;

        return $this;
    }
}