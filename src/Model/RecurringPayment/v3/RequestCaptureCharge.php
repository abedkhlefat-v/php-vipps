<?php

namespace zaporylie\Vipps\Model\RecurringPayment\v3;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class RequestRefundCharge
 *
 * @package Vipps\Model\RecurringPayment
 */
class RequestCaptureCharge
{
    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $amount;

    /**
     * Sets amount variable.
     *
     * @param int $amount
     *
     * @return $this
     */
    public function setAmount(int $amount)
    {
        $this->amount = $amount;
        return $this;
    }
}
