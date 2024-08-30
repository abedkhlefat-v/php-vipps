<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class OrderBottomLine
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $currency;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     */
    protected $tipAmount;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     */
    protected $giftCardAmount;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    protected $terminalId;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\PaymentSources|null
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\PaymentSources")
     */
    protected $paymentSources;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    protected $receiptNumber;

    /**
     * Sets currency variable.
     *
     * @param string $currency
     *
     * @return $this
     */
    public function setCurrency(string $currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Sets giftCardAmount variable.
     *
     * @param int|null $giftCardAmount
     *
     * @return $this
     */
    public function setGiftCardAmount(?int $giftCardAmount)
    {
        $this->giftCardAmount = $giftCardAmount;
        return $this;
    }

    /**
     * Sets paymentSources variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\PaymentSources|null $paymentSources
     *
     * @return $this
     */
    public function setPaymentSources(?PaymentSources $paymentSources)
    {
        $this->paymentSources = $paymentSources;
        return $this;
    }

    /**
     * Sets receiptNumber variable.
     *
     * @param string|null $receiptNumber
     *
     * @return $this
     */
    public function setReceiptNumber(?string $receiptNumber)
    {
        $this->receiptNumber = $receiptNumber;
        return $this;
    }

    /**
     * Sets terminalId variable.
     *
     * @param string|null $terminalId
     *
     * @return $this
     */
    public function setTerminalId(?string $terminalId)
    {
        $this->terminalId = $terminalId;
        return $this;
    }

    /**
     * Sets tipAmount variable.
     *
     * @param int|null $tipAmount
     *
     * @return $this
     */
    public function setTipAmount(?int $tipAmount)
    {
        $this->tipAmount = $tipAmount;
        return $this;
    }
}
