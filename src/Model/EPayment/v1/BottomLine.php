<?php

namespace zaporylie\Vipps\Model\EPayment\v1;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class PaymentDetails
 *
 * @package Vipps\Model\EPayment
 */
class BottomLine
{
  /**
   * @var string
   * @Serializer\Type("string")
   */
    protected $currency;

  /**
   * @var int
   * @Serializer\Type("integer")
   */
    protected $tipAmount;

  /**
   * @var string|null
   * @Serializer\Type("string|null")
   */
    protected $posId;

    protected $shippingInfo;

    protected $paymentSources;

    protected $barCode;

  /**
   * @var string
   * @Serializer\Type("string")
   */
    protected $receiptNumber;
}
