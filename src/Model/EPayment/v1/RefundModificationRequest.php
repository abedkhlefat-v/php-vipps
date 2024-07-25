<?php

namespace zaporylie\Vipps\Model\EPayment\v1;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class CancelPaymentRequest
 *
 * @package Vipps\Model\EPayment
 */
class RefundModificationRequest
{
    /**
     * @var \zaporylie\Vipps\Model\EPayment\v1\Amount
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\v1\Amount")
     */
    protected $modificationAmount;

    /**
     * Sets modificationAmount variable.
     *
     * @param \zaporylie\Vipps\Model\EPayment\v1\Amount $modificationAmount
     *
     * @return $this
     */
    public function setModificationAmount(Amount $modificationAmount)
    {
        $this->modificationAmount = $modificationAmount;
        return $this;
    }
}
