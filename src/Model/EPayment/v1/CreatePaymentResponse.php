<?php

namespace zaporylie\Vipps\Model\EPayment\v1;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class CreatePaymentResponse
 *
 * @package Vipps\Model\EPayment
 */
class CreatePaymentResponse
{

  /**
   * @var string
   * @Serializer\Type("string")
   */
    protected $redirectUrl;

  /**
   * @var string
   * @Serializer\Type("string")
   */
    protected $reference;

  /**
   * Gets redirectUrl value.
   *
   * @return string
   */
    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
    }

  /**
   * Gets reference value.
   *
   * @return string
   */
    public function getReference(): string
    {
        return $this->reference;
    }
}
