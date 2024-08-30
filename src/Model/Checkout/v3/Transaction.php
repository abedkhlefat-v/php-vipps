<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class AirlineData
 *
 * @package Vipps\Model\EPayment
 */
class Transaction
{
    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\Amount
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\Amount")
     */
    protected $amount;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $reference;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $paymentDescription;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\OrderSummary
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\OrderSummary")
     */
    protected $orderSummary;

    /**
     * Sets amount variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\Amount $amount
     *
     * @return $this
     */
    public function setAmount(Amount $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Sets orderSummary variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\OrderSummary $orderSummary
     *
     * @return $this
     */
    public function setOrderSummary(
        \zaporylie\Vipps\Model\Checkout\v3\OrderSummary $orderSummary
    ) {
        $this->orderSummary = $orderSummary;
        return $this;
    }

    /**
     * Sets paymentDescription variable.
     *
     * @param string $paymentDescription
     *
     * @return $this
     */
    public function setPaymentDescription(string $paymentDescription)
    {
        $this->paymentDescription = $paymentDescription;
        return $this;
    }

    /**
     * Sets reference variable.
     *
     * @param string $reference
     *
     * @return $this
     */
    public function setReference(string $reference)
    {
        $this->reference = $reference;
        return $this;
    }
}
