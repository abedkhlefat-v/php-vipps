<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class OrderLine
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $name;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $id;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $totalAmount;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $totalAmountExcludingTax;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $totalTaxAmount;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $taxPercentago;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\UnitInfo
     * @Serializer\Type("array<zaporylie\Vipps\Model\Checkout\v3\UnitInfo>")
     */
    protected $unitInfo;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     */
    protected $discount;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $productUrl;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    protected $isReturn;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    protected $isShipping;

    /**
     * Sets discount variable.
     *
     * @param int|null $discount
     *
     * @return $this
     */
    public function setDiscount(?int $discount) {
        $this->discount = $discount;
        return $this;
    }

    /**
     * Sets id variable.
     *
     * @param string $id
     *
     * @return $this
     */
    public function setId(string $id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Sets isReturn variable.
     *
     * @param bool $isReturn
     *
     * @return $this
     */
    public function setIsReturn(bool $isReturn) {
        $this->isReturn = $isReturn;
        return $this;
    }

    /**
     * Sets isShipping variable.
     *
     * @param bool $isShipping
     *
     * @return $this
     */
    public function setIsShipping(bool $isShipping) {
        $this->isShipping = $isShipping;
        return $this;
    }

    /**
     * Sets name variable.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName(string $name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Sets productUrl variable.
     *
     * @param string $productUrl
     *
     * @return $this
     */
    public function setProductUrl(string $productUrl) {
        $this->productUrl = $productUrl;
        return $this;
    }

    /**
     * Sets taxPercentago variable.
     *
     * @param int $taxPercentago
     *
     * @return $this
     */
    public function setTaxPercentago(int $taxPercentago) {
        $this->taxPercentago = $taxPercentago;
        return $this;
    }

    /**
     * Sets totalAmount variable.
     *
     * @param int $totalAmount
     *
     * @return $this
     */
    public function setTotalAmount(int $totalAmount) {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * Sets totalAmountExcludingTax variable.
     *
     * @param int $totalAmountExcludingTax
     *
     * @return $this
     */
    public function setTotalAmountExcludingTax(int $totalAmountExcludingTax) {
        $this->totalAmountExcludingTax = $totalAmountExcludingTax;
        return $this;
    }

    /**
     * Sets totalTaxAmount variable.
     *
     * @param int $totalTaxAmount
     *
     * @return $this
     */
    public function setTotalTaxAmount(int $totalTaxAmount) {
        $this->totalTaxAmount = $totalTaxAmount;
        return $this;
    }

    /**
     * Sets unitInfo variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\UnitInfo $unitInfo
     *
     * @return $this
     */
    public function setUnitInfo(UnitInfo $unitInfo) {
        $this->unitInfo = $unitInfo;
        return $this;
    }

}
