<?php

namespace zaporylie\Vipps\Model\EPayment\v1;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class TransactionLog
 *
 * @package Vipps\Model\Payment
 */
class EventLog
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $reference;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $pspReference;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $name;


    /**
     * @var \zaporylie\Vipps\Model\EPayment\v1\Amount
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\v1\Amount")
     */
    protected $amount;

    /**
     * Strangely timestamps occasionally feature too many microseconds.
     *
     * @var \DateTimeInterface
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:s.u\Z', '', ['Y-m-d\TH:i:s.u\Z','Y-m-d\TH:i:s.\0u\Z']>")
     */
    protected $timestamp;

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
     * Gets reference value.
     *
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * Gets pspReference value.
     *
     * @return string
     */
    public function getPspReference(): string
    {
        return $this->pspReference;
    }

    /**
     * Gets amount value.
     *
     * @return \zaporylie\Vipps\Model\EPayment\v1\Amount
     */
    public function getAmount(): Amount
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
     * Gets name value.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Gets success value.
     *
     * @return string
     */
    public function getSuccess(): string
    {
        return $this->success;
    }

    /**
     * Gets timeStamp value.
     *
     * @return \DateTimeInterface
     */
    public function getTimeStamp(): \DateTimeInterface
    {
        return $this->timeStamp;
    }
}
