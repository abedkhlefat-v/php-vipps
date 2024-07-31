<?php

namespace zaporylie\Vipps\Model\RecurringPayment\v3;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ResponseGetAgreement
 *
 * @package Vipps\Model\RecurringPayment
 */
class Agreement
{

    /**
     * @var \zaporylie\Vipps\Model\RecurringPayment\v3\CampaignRequest
     * @Serializer\Type("zaporylie\Vipps\Model\RecurringPayment\v3\CampaignRequest")
     */
    protected $campaign;

    /**
     * @var \zaporylie\Vipps\Model\RecurringPayment\v3\Pricing
     * @Serializer\Type("zaporylie\Vipps\Model\RecurringPayment\v3\Pricing")
     */
    protected $pricing;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $id;

    /**
     * @var \zaporylie\Vipps\Model\RecurringPayment\v3\AgreementInterval
     * @Serializer\Type("zaporylie\Vipps\Model\RecurringPayment\v3\AgreementInterval")
     */
    protected $interval;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $productName;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $productDescription;

    /**
     * @var \DateTimeInterface
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:s\Z'>")
     */
    protected $created;

    /**
     * @var \DateTimeInterface|null
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:s\Z'>")
     */
    protected $start;

    /**
     * @var \DateTimeInterface|null
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:s\Z'>")
     */
    protected $stop;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $status;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $merchantAgreementUrl;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $merchantRedirectUrl;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    protected $sub;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    protected $userinfoUrl;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $externalId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $countryCode;

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
     * Gets campaign value.
     *
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\CampaignRequest
     */
    public function getCampaign(): CampaignRequest
    {
        return $this->campaign;
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
     * Gets interval value.
     *
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\AgreementInterval
     */
    public function getInterval(): AgreementInterval
    {
        return $this->interval;
    }

    /**
     * Gets price value.
     *
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\Pricing
     */
    public function getPricing(): Pricing
    {
        return $this->pricing;
    }

    /**
     * Gets productDescription value.
     *
     * @return string
     */
    public function getProductDescription(): string
    {
        return $this->productDescription;
    }

    /**
     * Gets start value.
     *
     * @return \DateTimeInterface|null
     */
    public function getStart(): ?\DateTimeInterface {
        return $this->start;
    }

    /**
     * Gets stop value.
     *
     * @return \DateTimeInterface|null
     */
    public function getStop(): ?\DateTimeInterface {
        return $this->stop;
    }

    /**
     * Gets productName value.
     *
     * @return string
     */
    public function getProductName(): string
    {
        return $this->productName;
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
     * Gets sub value.
     *
     * @return string|null
     */
    public function getSub(): ?string
    {
        return $this->sub;
    }

    /**
     * Gets userInfoUrl value.
     *
     * @return string|null
     */
    public function getUserInfoUrl(): ?string
    {
        return $this->userinfoUrl;
    }

    /**
     * Gets uuid value.
     *
     * @return string
     */
    public function getUuid(): string {
        return $this->uuid;
    }

    /**
     * Gets countryCode value.
     *
     * @return string
     */
    public function getCountryCode(): string {
        return $this->countryCode;
    }

    /**
     * Gets created value.
     *
     * @return \DateTimeInterface
     */
    public function getCreated(): \DateTimeInterface {
        return $this->created;
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
     * Gets merchantAgreementUrl value.
     *
     * @return string
     */
    public function getMerchantAgreementUrl(): string {
        return $this->merchantAgreementUrl;
    }

    /**
     * Gets merchantRedirectUrl value.
     *
     * @return string
     */
    public function getMerchantRedirectUrl(): string {
        return $this->merchantRedirectUrl;
    }

    /**
     * Gets vippsConfirmationUrl value.
     *
     * @return string
     */
    public function getVippsConfirmationUrl(): string {
        return $this->vippsConfirmationUrl;
    }
}
