<?php

namespace zaporylie\Vipps\Model\EPayment\v1;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class OrderLine
 * @package Vipps\Model\EPayment
 */
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
     * @var int|null
     * @Serializer\Type("integer|null")
     */
    protected $totalAmount;

    /**
     * @var int|null
     * @Serializer\Type("integer|null")
     */
    protected $totalAmountExcludingTax;

    /**
     * @var int|null
     * @Serializer\Type("integer|null")
     */
    protected $totalTaxAmount;

    /**
     * @var int|null
     * @Serializer\Type("integer|null")
     *
     * @deprecated Either this or taxRate must be set.
     */
    protected $taxPercentage;

    /**
     * @var int|null
     * @Serializer\Type("integer|null")
     */
    protected $taxRate;

    /**
     * @var \zaporylie\Vipps\Model\EPayment\v1\UnitInfo
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\v1\UnitInfo")
     */
    protected $unitInfo;

    /**
     * @var int|null
     * @Serializer\Type("integer|null")
     */
    protected $discount;

    /**
     * @var string|null
     * @Serializer\Type("string|null")
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
     * Sets name variable.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Sets id variable.
     *
     * @param string $id
     *
     * @return $this
     */
    public function setId(string $id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Sets totalAmount variable.
     *
     * @param int|null $totalAmount
     *
     * @return $this
     */
    public function setTotalAmount(?int $totalAmount)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * Sets totalAmountExcludingTax variable.
     *
     * @param int|null $totalAmountExcludingTax
     *
     * @return $this
     */
    public function setTotalAmountExcludingTax(?int $totalAmountExcludingTax)
    {
        $this->totalAmountExcludingTax = $totalAmountExcludingTax;
        return $this;
    }

    /**
     * Sets totalTaxAmount variable.
     *
     * @param int|null $totalTaxAmount
     *
     * @return $this
     */
    public function setTotalTaxAmount(?int $totalTaxAmount)
    {
        $this->totalTaxAmount = $totalTaxAmount;
        return $this;
    }

    /**
     * Sets taxPercentage variable.
     *
     * @param int|null $taxPercentage
     *
     * @return $this
     *
     * @deprecated
     * @see self::$taxPercentage
     */
    public function setTaxPercentage(?int $taxPercentage)
    {
        $this->taxPercentage = $taxPercentage;
        return $this;
    }

    /**
     * Sets unitInfo variable.
     *
     * @param \zaporylie\Vipps\Model\EPayment\v1\UnitInfo $unitInfo
     *
     * @return $this
     */
    public function setUnitInfo(UnitInfo $unitInfo)
    {
        $this->unitInfo = $unitInfo;
        return $this;
    }

    /**
     * Sets discount variable.
     *
     * @param int|null $discount
     *
     * @return $this
     */
    public function setDiscount(?int $discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * Sets productUrl variable.
     *
     * @param string|null $productUrl
     *
     * @return $this
     */
    public function setProductUrl(?string $productUrl)
    {
        $this->productUrl = $productUrl;
        return $this;
    }

    /**
     * Sets isReturn variable.
     *
     * @param bool $isReturn
     *
     * @return $this
     */
    public function setIsReturn(bool $isReturn)
    {
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
    public function setIsShipping(bool $isShipping)
    {
        $this->isShipping = $isShipping;
        return $this;
    }

    /**
     * Sets taxRate variable.
     *
     * @param int|null $taxRate
     *
     * @return $this
     */
    public function setTaxRate(?int $taxRate)
    {
        $this->taxRate = $taxRate;
        return $this;
    }
}
