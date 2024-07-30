<?php

namespace zaporylie\Vipps\Model\RecurringPayment\v3;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Pricing.
 *
 * @package Vipps\Model\RecurringPayment
 */
class Pricing
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $type;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $currency;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $amount;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $suggestedMaxAmount;

    /**
     * Sets amount variable.
     *
     * @param int $amount
     *
     * @return $this
     */
    public function setAmount(int $amount) {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets amount value.
     *
     * @return int
     */
    public function getAmount(): int {
        return $this->amount;
    }

    /**
     * Sets suggestedMaxAmount variable.
     *
     * @param int $suggestedMaxAmount
     *
     * @return $this
     */
    public function setSuggestedMaxAmount(int $suggestedMaxAmount) {
        $this->suggestedMaxAmount = $suggestedMaxAmount;
        return $this;
    }

    /**
     * Gets suggestedMaxAmount value.
     *
     * @return int
     */
    public function getSuggestedMaxAmount(): int {
        return $this->suggestedMaxAmount;
    }

    /**
     * Sets type variable.
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType(string $type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets type value.
     *
     * @return string
     */
    public function getType(): string {
        return $this->type;
    }

    /**
     * Sets currency variable.
     *
     * @param string $currency
     *
     * @return $this
     */
    public function setCurrency(string $currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Gets currency value.
     *
     * @return string
     */
    public function getCurrency(): string {
        return $this->currency;
    }
}
