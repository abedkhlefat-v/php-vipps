<?php

namespace zaporylie\Vipps\Model\RecurringPayment\v3;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class InitialCharge.
 *
 * @package Vipps\Model\RecurringPayment
 */
class Pricing
{
  /**
   * @var int
   * @Serializer\Type("integer")
   */
  protected $amount;

  /**
   * @var string
   * @Serializer\Type("string")
   */
  protected $currency;

  /**
   * @var string
   * @Serializer\Type("string")
   */
  protected $type;

  /**
   * Gets amount value.
   *
   * @return int
   */
  public function getAmount(): int {
    return $this->amount;
  }

  /**
   * Gets currency value.
   *
   * @return string
   */
  public function getCurrency(): string {
    return $this->currency;
  }

  /**
   * Gets type value.
   *
   * @return string
   */
  public function getType(): string {
    return $this->type;
  }

  /**
   * Sets amount variable.
   *
   * @param int $amount
   *
   * @return $this
   */
  public function setAmount($amount)
  {
    $this->amount = $amount;
    return $this;
  }

  /**
   * Sets currency variable.
   *
   * @param string $currency
   *
   * @return $this
   */
  public function setCurrency($currency)
  {
    $this->currency = $currency;
    return $this;
  }

  /**
   * Sets transactionType variable.
   *
   * @param string $transactionType
   *
   * @return $this
   */
  public function setType($transactionType)
  {
    $this->transactionType = $transactionType;
    return $this;
  }
}
