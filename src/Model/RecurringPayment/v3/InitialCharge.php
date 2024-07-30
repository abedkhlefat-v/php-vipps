<?php

namespace zaporylie\Vipps\Model\RecurringPayment\v3;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class InitialCharge.
 *
 * @package Vipps\Model\RecurringPayment
 */
class InitialCharge
{
    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $amount;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $description;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $transactionType;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $orderId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $externalId;

    /**
     * Sets externalId variable.
     *
     * @param string $externalId
     *
     * @return $this
     */
    public function setExternalId(string $externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Gets externalId value.
     *
     * @return string
     */
    public function getExternalId(): string {
        return $this->externalId;
    }

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
     * Gets description value.
     *
     * @return string
     */
    public function getDescription(): string {
        return $this->description;
    }

    /**
     * Sets orderId variable.
     *
     * @param string $orderId
     *
     * @return $this
     */
    public function setOrderId(string $orderId) {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * Gets orderId value.
     *
     * @return string
     */
    public function getOrderId(): string {
        return $this->orderId;
    }

    /**
     * Sets transactionType variable.
     *
     * @param string $transactionType
     *
     * @return $this
     */
    public function setTransactionType(string $transactionType) {
        $this->transactionType = $transactionType;
        return $this;
    }

    /**
     * Gets transactionType value.
     *
     * @return string
     */
    public function getTransactionType(): string {
        return $this->transactionType;
    }
}
