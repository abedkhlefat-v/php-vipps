<?php

namespace zaporylie\Vipps\Model\EPayment\v1;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ShippingInfo
 * @package Vipps\Model\EPayment
 */
class ShippingInfo
{
  /**
   * @var int|null
   * @Serializer\Type("integer|null")
   */
    protected $amount;

  /**
   * @var int|null
   * @Serializer\Type("integer|null")
   */
    protected $amountExcludingTax;

  /**
   * @var int|null
   * @Serializer\Type("integer|null")
   */
    protected $taxAmount;

  /**
   * @var int|null
   * @Serializer\Type("integer|null")
   */
    protected $taxPercentage;

  /**
   * Gets amount value.
   *
   * @return int|null
   */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

  /**
   * Gets amountExcludingTax value.
   *
   * @return int|null
   */
    public function getAmountExcludingTax(): ?int
    {
        return $this->amountExcludingTax;
    }

  /**
   * Gets taxAmount value.
   *
   * @return int|null
   */
    public function getTaxAmount(): ?int
    {
        return $this->taxAmount;
    }

  /**
   * Gets taxPercentage value.
   *
   * @return int|null
   */
    public function getTaxPercentage(): ?int
    {
        return $this->taxPercentage;
    }

  /**
   * Sets amount variable.
   *
   * @param int|null $amount
   *
   * @return $this
   */
    public function setAmount(?int $amount)
    {
        $this->amount = $amount;
        return $this;
    }

  /**
   * Sets amountExcludingTax variable.
   *
   * @param int|null $amountExcludingTax
   *
   * @return $this
   */
    public function setAmountExcludingTax(?int $amountExcludingTax)
    {
        $this->amountExcludingTax = $amountExcludingTax;
        return $this;
    }

  /**
   * Sets taxAmount variable.
   *
   * @param int|null $taxAmount
   *
   * @return $this
   */
    public function setTaxAmount(?int $taxAmount)
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

  /**
   * Sets taxPercentage variable.
   *
   * @param int|null $taxPercentage
   *
   * @return $this
   */
    public function setTaxPercentage(?int $taxPercentage)
    {
        $this->taxPercentage = $taxPercentage;
        return $this;
    }
}
