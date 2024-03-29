<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Model;

class ConfigGetResponse200Shell extends \ArrayObject
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
     * @var ConfigGetResponse200ShellPeerValidator
     */
    protected $peerValidator;
    /**
     * @var ConfigGetResponse200ShellBlockValidator
     */
    protected $blockValidator;
    /**
     * @var ConfigGetResponse200ShellPrevalidator
     */
    protected $prevalidator;

    protected $chainValidator;
    /**
     * Storage mode for the Tezos shell.
     */
    protected $historyMode;

    public function getPeerValidator(): ConfigGetResponse200ShellPeerValidator
    {
        return $this->peerValidator;
    }

    public function setPeerValidator(ConfigGetResponse200ShellPeerValidator $peerValidator): self
    {
        $this->initialized['peerValidator'] = true;
        $this->peerValidator = $peerValidator;

        return $this;
    }

    public function getBlockValidator(): ConfigGetResponse200ShellBlockValidator
    {
        return $this->blockValidator;
    }

    public function setBlockValidator(ConfigGetResponse200ShellBlockValidator $blockValidator): self
    {
        $this->initialized['blockValidator'] = true;
        $this->blockValidator = $blockValidator;

        return $this;
    }

    public function getPrevalidator(): ConfigGetResponse200ShellPrevalidator
    {
        return $this->prevalidator;
    }

    public function setPrevalidator(ConfigGetResponse200ShellPrevalidator $prevalidator): self
    {
        $this->initialized['prevalidator'] = true;
        $this->prevalidator = $prevalidator;

        return $this;
    }

    public function getChainValidator()
    {
        return $this->chainValidator;
    }

    public function setChainValidator($chainValidator): self
    {
        $this->initialized['chainValidator'] = true;
        $this->chainValidator = $chainValidator;

        return $this;
    }

    /**
     * Storage mode for the Tezos shell.
     */
    public function getHistoryMode()
    {
        return $this->historyMode;
    }

    /**
     * Storage mode for the Tezos shell.
     */
    public function setHistoryMode($historyMode): self
    {
        $this->initialized['historyMode'] = true;
        $this->historyMode = $historyMode;

        return $this;
    }
}
