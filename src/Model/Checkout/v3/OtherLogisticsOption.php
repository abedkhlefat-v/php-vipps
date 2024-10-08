<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class OtherLogisticsOption
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
    protected $title;

    /**
     * Default: OTHER.
     *
     * @var string
     * @Serializer\Type("string")
     */
    protected $brand;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $id;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $priority;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    protected $isDefault;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $description;

    /**
     * Sets amount variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\Amount $amount
     *
     * @return $this
     */
    public function setAmount(Amount $amount) {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Sets brand variable.
     *
     * @param string $brand
     *
     * @return $this
     */
    public function setBrand(string $brand) {
        $this->brand = $brand;
        return $this;
    }

    /**
     * Sets description variable.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription(string $description) {
        $this->description = $description;
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
     * Sets isDefault variable.
     *
     * @param bool $isDefault
     *
     * @return $this
     */
    public function setIsDefault(bool $isDefault) {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * Sets priority variable.
     *
     * @param int $priority
     *
     * @return $this
     */
    public function setPriority(int $priority) {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Sets title variable.
     *
     * @param string $title
     *
     * @return $this
     */
    public function setTitle(string $title) {
        $this->title = $title;
        return $this;
    }
}
