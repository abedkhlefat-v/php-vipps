<?php

namespace zaporylie\Vipps\Model\EPayment\v1;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class CancelPaymentRequest
 *
 * @package Vipps\Model\EPayment
 */
class CancelModificationRequest
{

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    protected $cancelTransactionOnly;

    /**
     * Sets cancelTransactionOnly variable.
     *
     * @param bool $cancelTransactionOnly
     *
     * @return $this
     */
    public function setCancelTransactionOnly(bool $cancelTransactionOnly) {
        $this->cancelTransactionOnly = $cancelTransactionOnly;
        return $this;
    }
}
