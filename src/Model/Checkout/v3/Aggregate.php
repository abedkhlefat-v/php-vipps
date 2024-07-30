<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class Aggregate
{

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\Amount
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\Amount")
     */
    protected $authorizedAmount;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\Amount
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\Amount")
     */
    protected $cancelledAmount;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\Amount
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\Amount")
     */
    protected $capturedAmount;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\Amount
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\Amount")
     */
    protected $refundedAmount;

    /**
     * Gets authorizedAmount value.
     *
     * @return \zaporylie\Vipps\Model\Checkout\v3\Amount
     */
    public function getAuthorizedAmount(): Amount
    {
        return $this->authorizedAmount;
    }

    /**
     * Sets authorizedAmount variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\Amount $authorizedAmount
     *
     * @return $this
     */
    public function setAuthorizedAmount(Amount $authorizedAmount)
    {
        $this->authorizedAmount = $authorizedAmount;
        return $this;
    }

    /**
     * Gets cancelledAmount value.
     *
     * @return \zaporylie\Vipps\Model\Checkout\v3\Amount
     */
    public function getCancelledAmount(): Amount
    {
        return $this->cancelledAmount;
    }

    /**
     * Sets cancelledAmount variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\Amount $cancelledAmount
     *
     * @return $this
     */
    public function setCancelledAmount(Amount $cancelledAmount)
    {
        $this->cancelledAmount = $cancelledAmount;
        return $this;
    }

    /**
     * Gets capturedAmount value.
     *
     * @return \zaporylie\Vipps\Model\Checkout\v3\Amount
     */
    public function getCapturedAmount(): Amount
    {
        return $this->capturedAmount;
    }

    /**
     * Sets capturedAmount variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\Amount $capturedAmount
     *
     * @return $this
     */
    public function setCapturedAmount(Amount $capturedAmount)
    {
        $this->capturedAmount = $capturedAmount;
        return $this;
    }

    /**
     * Gets refundedAmount value.
     *
     * @return \zaporylie\Vipps\Model\Checkout\v3\Amount
     */
    public function getRefundedAmount(): Amount
    {
        return $this->refundedAmount;
    }

    /**
     * Sets refundedAmount variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\Amount $refundedAmount
     *
     * @return $this
     */
    public function setRefundedAmount(Amount $refundedAmount)
    {
        $this->refundedAmount = $refundedAmount;
        return $this;
    }
}
