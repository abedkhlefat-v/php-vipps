<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class Amount
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $currency;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $value;

    /**
     * Gets currency value.
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Gets value value.
     *
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

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
     * Sets value variable.
     *
     * @param int $value
     *
     * @return $this
     */
    public function setValue(int $value)
    {
        $this->value = $value;
        return $this;
    }
}
