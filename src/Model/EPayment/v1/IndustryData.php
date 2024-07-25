<?php

namespace zaporylie\Vipps\Model\EPayment\v1;

use JMS\Serializer\Annotation as Serializer;

/**
 * @see https://developer.vippsmobilepay.com/api/epayment/#tag/CreatePayments/operation/createPayment
 * @package Vipps\Model\EPayment
 *
 */
class IndustryData
{

    /**
     * @var \zaporylie\Vipps\Model\EPayment\v1\AirlineData
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\v1\AirlineData")
     */
    protected $airlineData;

    /**
     * Gets airlineData value.
     *
     * @return \zaporylie\Vipps\Model\EPayment\v1\AirlineData
     */
    public function getAirlineData(): AirlineData
    {
        return $this->airlineData;
    }

    /**
     * Sets airlineData variable.
     *
     * @param \zaporylie\Vipps\Model\EPayment\v1\AirlineData $airlineData
     *
     * @return $this
     */
    public function setAirlineData(AirlineData $airlineData): self
    {
        $this->airlineData = $airlineData;
        return $this;
    }
}
