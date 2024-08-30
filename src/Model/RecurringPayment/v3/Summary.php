<?php

namespace zaporylie\Vipps\Model\RecurringPayment\v3;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class InitialCharge.
 *
 * @package Vipps\Model\RecurringPayment
 */
class Summary
{
  /**
   * @var int
   * @Serializer\Type("integer")
   */
    protected $captured;

  /**
   * @var int
   * @Serializer\Type("integer")
   */
    protected $refunded;

  /**
   * @var int
   * @Serializer\Type("integer")
   */
    protected $cancelled;

  /**
   * Gets captured value.
   *
   * @return int
   */
    public function getCaptured(): int
    {
        return $this->captured;
    }

  /**
   * Gets refunded value.
   *
   * @return int
   */
    public function getRefunded(): int
    {
        return $this->refunded;
    }

  /**
   * Gets cancelled value.
   *
   * @return int
   */
    public function getCancelled(): int
    {
        return $this->cancelled;
    }
}
