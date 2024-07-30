<?php

namespace zaporylie\Vipps\Model\RecurringPayment\v3;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ResponseCreateCharge
 *
 * @package Vipps\Model\RecurringPayment
 */
class ResponseCreateCharge
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $chargeId;

    /**
     * Gets chargeId value.
     *
     * @return string
     */
    public function getChargeId(): string
    {
        return $this->chargeId;
    }
}
