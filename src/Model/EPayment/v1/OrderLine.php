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
   */
    protected $taxPercentage;

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
   * Gets name value.
   *
   * @return string
   */
    public function getName(): string
    {
        return $this->name;
    }

  /**
   * Gets id value.
   *
   * @return string
   */
    public function getId(): string
    {
        return $this->id;
    }

  /**
   * Gets totalAmount value.
   *
   * @return int|null
   */
    public function getTotalAmount(): ?int
    {
        return $this->totalAmount;
    }

  /**
   * Gets totalAmountExcludingTax value.
   *
   * @return int|null
   */
    public function getTotalAmountExcludingTax(): ?int
    {
        return $this->totalAmountExcludingTax;
    }

  /**
   * Gets totalTaxAmount value.
   *
   * @return int|null
   */
    public function getTotalTaxAmount(): ?int
    {
        return $this->totalTaxAmount;
    }

  /**
   * Gets taxPercentage value.
   *
   * @return int|null
   */
    public function getTaxPercentage(): ?int
    {
        return $this->taxPercentage;
    }

  /**
   * Gets unitInfo value.
   *
   * @return \zaporylie\Vipps\Model\EPayment\v1\UnitInfo
   */
    public function getUnitInfo(): UnitInfo
    {
        return $this->unitInfo;
    }

  /**
   * Gets discount value.
   *
   * @return int|null
   */
    public function getDiscount(): ?int
    {
        return $this->discount;
    }

  /**
   * Gets productUrl value.
   *
   * @return string|null
   */
    public function getProductUrl(): ?string
    {
        return $this->productUrl;
    }

  /**
   * Gets isReturn value.
   *
   * @return bool
   */
    public function isReturn(): bool
    {
        return $this->isReturn;
    }

  /**
   * Gets isShipping value.
   *
   * @return bool
   */
    public function isShipping(): bool
    {
        return $this->isShipping;
    }

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
}
