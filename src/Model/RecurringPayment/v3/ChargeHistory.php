<?php

namespace zaporylie\Vipps\Model\RecurringPayment\v3;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Charge.
 *
 * @package Vipps\Model\RecurringPayment
 */
class ChargeHistory
{

    /**
     * @var \DateTimeInterface
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:s\Z'>")
     */
    protected $occurred;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $event;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $amount;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $idempotencyKey;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    protected $success;

    /**
     * Gets occurred value.
     *
     * @return \DateTimeInterface
     */
    public function getOccurred(): \DateTimeInterface
    {
        return $this->occurred;
    }

    /**
     * Gets event value.
     *
     * @return string
     */
    public function getEvent(): string
    {
        return $this->event;
    }

    /**
     * Gets amount value.
     *
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Gets idempotencyKey value.
     *
     * @return string
     */
    public function getIdempotencyKey(): string
    {
        return $this->idempotencyKey;
    }

    /**
     * Gets success value.
     *
     * @return bool
     */
    public function getSuccess(): bool
    {
        return $this->success;
    }
}
