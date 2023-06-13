<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Model;

class MetadataGetResponse200 extends \ArrayObject
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
    protected $protocol;
    /**
     * @var string
     */
    protected $nextProtocol;
    /**
     * The status of the test chain: not_running (there is no test chain at the moment), forking (the test chain is being setup), running (the test chain is running).
     */
    protected $testChainStatus;
    /**
     * @var int
     */
    protected $maxOperationsTtl;
    /**
     * @var int
     */
    protected $maxOperationDataLength;
    /**
     * @var int
     */
    protected $maxBlockHeaderLength;
    /**
     * @var MetadataGetResponse200MaxOperationListLengthItem[]
     */
    protected $maxOperationListLength;

    public function getProtocol(): string
    {
        return $this->protocol;
    }

    public function setProtocol(string $protocol): self
    {
        $this->initialized['protocol'] = true;
        $this->protocol = $protocol;

        return $this;
    }

    public function getNextProtocol(): string
    {
        return $this->nextProtocol;
    }

    public function setNextProtocol(string $nextProtocol): self
    {
        $this->initialized['nextProtocol'] = true;
        $this->nextProtocol = $nextProtocol;

        return $this;
    }

    /**
     * The status of the test chain: not_running (there is no test chain at the moment), forking (the test chain is being setup), running (the test chain is running).
     */
    public function getTestChainStatus()
    {
        return $this->testChainStatus;
    }

    /**
     * The status of the test chain: not_running (there is no test chain at the moment), forking (the test chain is being setup), running (the test chain is running).
     */
    public function setTestChainStatus($testChainStatus): self
    {
        $this->initialized['testChainStatus'] = true;
        $this->testChainStatus = $testChainStatus;

        return $this;
    }

    public function getMaxOperationsTtl(): int
    {
        return $this->maxOperationsTtl;
    }

    public function setMaxOperationsTtl(int $maxOperationsTtl): self
    {
        $this->initialized['maxOperationsTtl'] = true;
        $this->maxOperationsTtl = $maxOperationsTtl;

        return $this;
    }

    public function getMaxOperationDataLength(): int
    {
        return $this->maxOperationDataLength;
    }

    public function setMaxOperationDataLength(int $maxOperationDataLength): self
    {
        $this->initialized['maxOperationDataLength'] = true;
        $this->maxOperationDataLength = $maxOperationDataLength;

        return $this;
    }

    public function getMaxBlockHeaderLength(): int
    {
        return $this->maxBlockHeaderLength;
    }

    public function setMaxBlockHeaderLength(int $maxBlockHeaderLength): self
    {
        $this->initialized['maxBlockHeaderLength'] = true;
        $this->maxBlockHeaderLength = $maxBlockHeaderLength;

        return $this;
    }

    /**
     * @return MetadataGetResponse200MaxOperationListLengthItem[]
     */
    public function getMaxOperationListLength(): array
    {
        return $this->maxOperationListLength;
    }

    /**
     * @param MetadataGetResponse200MaxOperationListLengthItem[] $maxOperationListLength
     */
    public function setMaxOperationListLength(array $maxOperationListLength): self
    {
        $this->initialized['maxOperationListLength'] = true;
        $this->maxOperationListLength = $maxOperationListLength;

        return $this;
    }
}