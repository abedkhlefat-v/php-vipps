<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class UnitInfo
{
    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $unitPrice;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $quantity;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $quantityUnit;


    /**
     * Sets quantity variable.
     *
     * @param string $quantity
     *
     * @return $this
     */
    public function setQuantity(string $quantity) {
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
    public function setQuantityUnit(string $quantityUnit) {
        $this->quantityUnit = $quantityUnit;
        return $this;
    }

    /**
     * Sets unitPrice variable.
     *
     * @param int $unitPrice
     *
     * @return $this
     */
    public function setUnitPrice(int $unitPrice) {
        $this->unitPrice = $unitPrice;
        return $this;
    }
}
