<?php

namespace zaporylie\Vipps\Model\EPayment\v1;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class UnitInfo
 *
 * @package Vipps\Model\EPayment
 */
class UnitInfo
{
  /**
   * @var int|null
   * @Serializer\Type("integer|null")
   */
    protected $unitPrice;

  /**
   * @var string
   * @Serializer\Type("string")
   */
    protected $quantity;

  /**
   * Available units for quantity.
   *
   * Available values: PCS, KG, KM, MINUTE, LITRE, KWH.
   * Default: PCS.
   *
   * @var string
   * @Serializer\Type("string")
   */
    protected $quantityUnit;

  /**
   * Gets unitPrice value.
   *
   * @return int|null
   */
    public function getUnitPrice(): ?int
    {
        return $this->unitPrice;
    }

  /**
   * Gets quantity value.
   *
   * @return string
   */
    public function getQuantity(): string
    {
        return $this->quantity;
    }

  /**
   * Gets quantityUnit value.
   *
   * @return string
   */
    public function getQuantityUnit(): string
    {
        return $this->quantityUnit;
    }

  /**
   * Sets unitPrice variable.
   *
   * @param int|null $unitPrice
   *
   * @return $this
   */
    public function setUnitPrice(?int $unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

  /**
   * Sets quantity variable.
   *
   * @param string $quantity
   *
   * @return $this
   */
    public function setQuantity(string $quantity)
    {
      // Less equal 10 characters and marches regex pattern "^\d+([\.]\d{1,8})?$".
        if (strlen($quantity) > 10 || !preg_match('/^\d+([\.]\d{1,8})?$/', $quantity)) {
            throw new \InvalidArgumentException(
                'Quantity must be less equal 10 characters and marches regex pattern "^\d+([\.]\d{1,8})?$".'
            );
        }
        $this->quantity = $quantity;
        return $this;
    }

  /**
   * Sets quantityUnit variable.
   *
   * @param string $quantityUnit
   *
   * @return $this
   */
    public function setQuantityUnit(string $quantityUnit)
    {
        assert(in_array($quantityUnit, [
          'PCS',
          'KG',
          'KM',
          'MINUTE',
          'LITRE',
          'KWH',
        ]), 'Quantity unit must be one of PCS, KG, KM, MINUTE, LITRE, KWH.');
        $this->quantityUnit = $quantityUnit;
        return $this;
    }
}
