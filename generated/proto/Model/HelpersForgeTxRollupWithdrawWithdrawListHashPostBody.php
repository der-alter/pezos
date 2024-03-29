<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Model;

class HelpersForgeTxRollupWithdrawWithdrawListHashPostBody extends \ArrayObject
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
     * @var HelpersForgeTxRollupWithdrawWithdrawListHashPostBodyWithdrawListItem[]
     */
    protected $withdrawList;

    /**
     * @return HelpersForgeTxRollupWithdrawWithdrawListHashPostBodyWithdrawListItem[]
     */
    public function getWithdrawList(): array
    {
        return $this->withdrawList;
    }

    /**
     * @param HelpersForgeTxRollupWithdrawWithdrawListHashPostBodyWithdrawListItem[] $withdrawList
     */
    public function setWithdrawList(array $withdrawList): self
    {
        $this->initialized['withdrawList'] = true;
        $this->withdrawList = $withdrawList;

        return $this;
    }
}
