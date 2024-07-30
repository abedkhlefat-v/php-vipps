<?php

namespace zaporylie\Vipps\Model\RecurringPayment\v3;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Charge.
 *
 * @package Vipps\Model\RecurringPayment
 */
class Charge
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
    protected $currency;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $description;

    /**
     * @var \DateTimeInterface
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:s\Z'>")
     */
    protected $due;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $id;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $agreementId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $externalId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $externalAgreementId;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $retryDays;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $status;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $transactionId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $type;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $transactionType;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $failureReason;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $failureDescription;

    /**
     * @var \zaporylie\Vipps\Model\RecurringPayment\v3\Summary
     * @Serializer\Type("zaporylie\Vipps\Model\RecurringPayment\v3\Summary")
     */
    protected $summary;

    /**
     * @var \zaporylie\Vipps\Model\RecurringPayment\v3\ChargeHistory[]
     * @Serializer\Type("array<zaporylie\Vipps\Model\RecurringPayment\v3\ChargeHistory>")
     */
    protected $history;

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
     * Gets amountRefunded value.
     *
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\Summary
     */
    public function getSummary(): Summary
    {
        return $this->summary;
    }

    /**
     * Gets description value.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Gets due value.
     *
     * @return \DateTimeInterface
     */
    public function getDue(): \DateTimeInterface
    {
        return $this->due;
    }

    /**
     * Gets failureDescription value.
     *
     * @return string
     */
    public function getFailureDescription(): string
    {
        return $this->failureDescription;
    }

    /**
     * Gets failureReason value.
     *
     * @return string
     */
    public function getFailureReason(): string
    {
        return $this->failureReason;
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
     * Gets status value.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Gets transactionId value.
     *
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * Gets type value.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
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
     * Gets agreementId value.
     *
     * @return string
     */
    public function getAgreementId(): string {
        return $this->agreementId;
    }

    /**
     * Gets currency value.
     *
     * @return string
     */
    public function getCurrency(): string {
        return $this->currency;
    }

    /**
     * Gets externalAgreementId value.
     *
     * @return string
     */
    public function getExternalAgreementId(): string {
        return $this->externalAgreementId;
    }

    /**
     * Gets history value.
     *
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\ChargeHistory[]
     */
    public function getHistory(): array {
        return $this->history;
    }

    /**
     * Gets retryDays value.
     *
     * @return int
     */
    public function getRetryDays(): int {
        return $this->retryDays;
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
