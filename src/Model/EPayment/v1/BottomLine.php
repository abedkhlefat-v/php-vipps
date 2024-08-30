<?php

namespace zaporylie\Vipps\Model\EPayment\v1;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class PaymentDetails
 *
 * @package Vipps\Model\EPayment
 */
class BottomLine
{
    /**
     * @var string|null
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
     * @deprecated Amount paid by gift card or coupon.
     */
    protected $giftCardAmount;

    /**
     * @var string|null
     * @Serializer\Type("string|null")
     */
    protected $posId;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     * @deprecated Deprecated, sum will be calculated based on the sum of the
     *   orderLines.
     */
    protected $totalAmount;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     * @deprecated Deprecated, tax will be calculated based on the sum of the
     *   totalTaxAmount field on each orderLine
     */
    protected $totalTax;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     * @deprecated Deprecated, discount will be calculated based on the sum of
     *   the discount field on each orderLine
     */
    protected $totalDiscount;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     * @deprecated Deprecated, use a regular orderLine with "isShipping" flag.
     *    Using this will result in faulty calculation of sum and tax.
     */
    protected $shippingAmount;

    /**
     * @var \zaporylie\Vipps\Model\EPayment\v1\ShippingInfo
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\v1\ShippingInfo")
     * @deprecated Deprecated, use a regular orderLine with "isShipping" flag.
     *   Using this will result in faulty calculation of sum and tax.
     */
    protected $shippingInfo;

    /**
     * @var \zaporylie\Vipps\Model\EPayment\v1\PaymentSources
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\v1\PaymentSources")
     */
    protected $paymentSources;

    /**
     * @var \zaporylie\Vipps\Model\EPayment\v1\Barcode
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\v1\Barcode")
     */
    protected $barCode;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $receiptNumber;

    /**
     * @var string|null
     * @Serializer\Type("string|null")
     * @deprecated Deprecated, use "posId" instead.
     */
    protected $terminalId;

    /**
     * Sets barCode variable.
     *
     * @param \zaporylie\Vipps\Model\EPayment\v1\Barcode $barCode
     *
     * @return $this
     */
    public function setBarCode(Barcode $barCode) {
        $this->barCode = $barCode;
        return $this;
    }

    /**
     * Sets currency variable.
     *
     * @param string|null $currency
     *
     * @return $this
     */
    public function setCurrency(?string $currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Sets giftCardAmount variable.
     *
     * @param int|null $giftCardAmount
     *
     * @return $this
     *
     * @deprecated
     * @see self::$giftCardAmount
     */
    public function setGiftCardAmount(?int $giftCardAmount) {
        $this->giftCardAmount = $giftCardAmount;
        return $this;
    }

    /**
     * Sets paymentSources variable.
     *
     * @param \zaporylie\Vipps\Model\EPayment\v1\PaymentSources $paymentSources
     *
     * @return $this
     */
    public function setPaymentSources(PaymentSources $paymentSources) {
        $this->paymentSources = $paymentSources;
        return $this;
    }

    /**
     * Sets posId variable.
     *
     * @param string|null $posId
     *
     * @return $this
     */
    public function setPosId(?string $posId) {
        $this->posId = $posId;
        return $this;
    }

    /**
     * Sets receiptNumber variable.
     *
     * @param string $receiptNumber
     *
     * @return $this
     */
    public function setReceiptNumber(string $receiptNumber) {
        $this->receiptNumber = $receiptNumber;
        return $this;
    }

    /**
     * Sets shippingAmount variable.
     *
     * @param int|null $shippingAmount
     *
     * @return $this
     *
     * @deprecated
     * @see self::$shippingAmount
     */
    public function setShippingAmount(?int $shippingAmount) {
        $this->shippingAmount = $shippingAmount;
        return $this;
    }

    /**
     * Sets shippingInfo variable.
     *
     * @param \zaporylie\Vipps\Model\EPayment\v1\ShippingInfo $shippingInfo
     *
     * @return $this
     *
     * @deprecated
     * @see self::$shippingInfo
     */
    public function setShippingInfo(ShippingInfo $shippingInfo) {
        $this->shippingInfo = $shippingInfo;
        return $this;
    }

    /**
     * Sets terminalId variable.
     *
     * @param string|null $terminalId
     *
     * @return $this
     *
     * @deprecated
     * @see self::$terminalId
     */
    public function setTerminalId(?string $terminalId) {
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
    public function setTipAmount(?int $tipAmount) {
        $this->tipAmount = $tipAmount;
        return $this;
    }

    /**
     * Sets totalAmount variable.
     *
     * @param int|null $totalAmount
     *
     * @return $this
     *
     * @deprecated
     * @see self::$totalAmount
     */
    public function setTotalAmount(?int $totalAmount) {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * Sets totalDiscount variable.
     *
     * @param int|null $totalDiscount
     *
     * @return $this
     *
     * @deprecated
     * @see self::$totalDiscount
     */
    public function setTotalDiscount(?int $totalDiscount) {
        $this->totalDiscount = $totalDiscount;
        return $this;
    }

    /**
     * Sets totalTax variable.
     *
     * @param int|null $totalTax
     *
     * @return $this
     *
     * @deprecated
     * @see self::$totalTax
     */
    public function setTotalTax(?int $totalTax) {
        $this->totalTax = $totalTax;
        return $this;
    }

}
