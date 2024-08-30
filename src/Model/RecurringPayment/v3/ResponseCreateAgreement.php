<?php

namespace zaporylie\Vipps\Model\RecurringPayment\v3;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ResponseCreateAgreement
 *
 * @package Vipps\Model\RecurringPayment
 */
class ResponseCreateAgreement
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $agreementId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $uuid;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $vippsConfirmationUrl;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    protected $chargeId;

    /**
     * Gets uuid value.
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * Gets agreementId value.
     *
     * @return string
     */
    public function getAgreementId(): string
    {
        return $this->agreementId;
    }

    /**
     * Gets vippsConfirmetionUrl value.
     *
     * @return string
     */
    public function getVippsConfirmationUrl(): string
    {
        return $this->vippsConfirmationUrl;
    }

    /**
     * Gets chargeId value.
     *
     * @return string|null
     */
    public function getChargeId(): ?string
    {
        return $this->chargeId;
    }
}
