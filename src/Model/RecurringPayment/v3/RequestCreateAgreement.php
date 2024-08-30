<?php

namespace zaporylie\Vipps\Model\RecurringPayment\v3;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class RequestCreateAgreement
 *
 * @package Vipps\Model\RecurringPayment
 */
class RequestCreateAgreement
{
    /**
     * @var \zaporylie\Vipps\Model\RecurringPayment\v3\CampaignRequest
     * @Serializer\Type("zaporylie\Vipps\Model\RecurringPayment\v3\CampaignRequest")
     */
    protected $campaign;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $customerPhoneNumber;

    /**
     * @var \zaporylie\Vipps\Model\RecurringPayment\v3\InitialCharge
     * @Serializer\Type("zaporylie\Vipps\Model\RecurringPayment\v3\InitialCharge")
     */
    protected $initialCharge;

    /**
     * @var \zaporylie\Vipps\Model\RecurringPayment\v3\AgreementInterval
     * @Serializer\Type("zaporylie\Vipps\Model\RecurringPayment\v3\AgreementInterval")
     */
    protected $interval;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    protected $isApp;

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
     * @var \zaporylie\Vipps\Model\RecurringPayment\v3\Pricing
     * @Serializer\Type("zaporylie\Vipps\Model\RecurringPayment\v3\Pricing")
     */
    protected $pricing;

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
     * @var string
     * @Serializer\Type("string")
     */
    protected $scope;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    protected $skipLandingPage;

    /**
     * @var string?
     * @Serializer\Type("string")
     */
    protected $externalId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $countryCode;

    /**
     * Sets externalId variable.
     *
     * @param string $externalId
     *
     * @return $this
     */
    public function setExternalId(string $externalId)
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Sets countryCode variable.
     *
     * @param string $countryCode
     *
     * @return $this
     */
    public function setCountryCode(string $countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Sets skipLandingPage variable.
     *
     * @param bool $skipLandingPage
     *
     * @return $this
     */
    public function setSkipLandingPage(bool $skipLandingPage)
    {
        $this->skipLandingPage = $skipLandingPage;
        return $this;
    }

    /**
     * Sets campaign variable.
     *
     * @param \zaporylie\Vipps\Model\RecurringPayment\v3\CampaignRequest $campaign
     *
     * @return $this
     */
    public function setCampaign(CampaignRequest $campaign)
    {
        $this->campaign = $campaign;
        return $this;
    }

    /**
     * Sets customerPhoneNumber variable.
     *
     * @param string $customerPhoneNumber
     *
     * @return $this
     */
    public function setCustomerPhoneNumber(string $customerPhoneNumber)
    {
        $this->customerPhoneNumber = $customerPhoneNumber;
        return $this;
    }

    /**
     * Sets initialCharge variable.
     *
     * @param \zaporylie\Vipps\Model\RecurringPayment\v3\InitialCharge $initialCharge
     *
     * @return $this
     */
    public function setInitialCharge(InitialCharge $initialCharge)
    {
        $this->initialCharge = $initialCharge;
        return $this;
    }

    /**
     * Sets interval variable.
     *
     * @param \zaporylie\Vipps\Model\RecurringPayment\v3\AgreementInterval $interval
     *
     * @return $this
     */
    public function setInterval(AgreementInterval $interval)
    {
        $this->interval = $interval;
        return $this;
    }

    /**
     * Sets isApp variable.
     *
     * @param bool $isApp
     *
     * @return $this
     */
    public function setIsApp(bool $isApp)
    {
        $this->isApp = $isApp;
        return $this;
    }

    /**
     * Sets merchantAgreementUrl variable.
     *
     * @param string $merchantAgreementUrl
     *
     * @return $this
     */
    public function setMerchantAgreementUrl(string $merchantAgreementUrl)
    {
        $this->merchantAgreementUrl = $merchantAgreementUrl;
        return $this;
    }

    /**
     * Sets merchantRedirectUrl variable.
     *
     * @param string $merchantRedirectUrl
     *
     * @return $this
     */
    public function setMerchantRedirectUrl(string $merchantRedirectUrl)
    {
        $this->merchantRedirectUrl = $merchantRedirectUrl;
        return $this;
    }

    /**
     * Sets pricing variable.
     *
     * @param \zaporylie\Vipps\Model\RecurringPayment\v3\Pricing $pricing
     *
     * @return $this
     */
    public function setPricing(Pricing $pricing)
    {
        $this->pricing = $pricing;
        return $this;
    }

    /**
     * Sets productDescription variable.
     *
     * @param string $productDescription
     *
     * @return $this
     */
    public function setProductDescription(string $productDescription)
    {
        $this->productDescription = $productDescription;
        return $this;
    }

    /**
     * Sets productName variable.
     *
     * @param string $productName
     *
     * @return $this
     */
    public function setProductName(string $productName)
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * Sets scope variable.
     *
     * @param string $scope
     *
     * @return $this
     */
    public function setScope(string $scope)
    {
        $this->scope = $scope;
        return $this;
    }
}
