<?php

namespace zaporylie\Vipps\Model\EPayment\v1;

use JMS\Serializer\Annotation as Serializer;

class Customer
{

  /**
   * @var string
   * @Serializer\Type("string")
   */
    protected $phoneNumber;

  /**
   * @var string
   * @Serializer\Type("string")
   */
    protected $personalQr;

  /**
   * Gets phoneNumber value.
   *
   * @return string
   */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

  /**
   * Gets personalQr value.
   *
   * @return string
   */
    public function getPersonalQr(): string
    {
        return $this->personalQr;
    }

  /**
   * Sets phoneNumber variable.
   *
   * @param string $phoneNumber
   *
   * @return $this
   */
    public function setPhoneNumber(string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

  /**
   * Sets personalQr variable.
   *
   * @param string $personalQr
   *
   * @return $this
   */
    public function setPersonalQr(string $personalQr)
    {
        $this->personalQr = $personalQr;
        return $this;
    }
}
