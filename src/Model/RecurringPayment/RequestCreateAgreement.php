<?php

namespace zaporylie\Vipps\Model\RecurringPayment;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class RequestCreateAgreement
 *
 * @package Vipps\Model\RecurringPayment
 */
class RequestCreateAgreement
{
    /**
     * @var \zaporylie\Vipps\Model\RecurringPayment\CampaignRequest
     * @Serializer\Type("zaporylie\Vipps\Model\RecurringPayment\CampaignRequest")
     */
    protected $campaign;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $customerPhoneNumber;

    /**
     * @var \zaporylie\Vipps\Model\RecurringPayment\InitialCharge
     * @Serializer\Type("zaporylie\Vipps\Model\RecurringPayment\InitialCharge")
     */
    protected $initialCharge;

    /**
     * @var \zaporylie\Vipps\Model\RecurringPayment\AgreementInterval
     * @Serializer\Type("zaporylie\Vipps\Model\RecurringPayment\AgreementInterval")
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
     * @var \zaporylie\Vipps\Model\RecurringPayment\Pricing
     * @Serializer\Type("zaporylie\Vipps\Model\RecurringPayment\Pricing")
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
     * Sets campaign variable.
     *
     * @param \zaporylie\Vipps\Model\RecurringPayment\CampaignRequest $campaign
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
    public function setCustomerPhoneNumber($customerPhoneNumber)
    {
        $this->customerPhoneNumber = $customerPhoneNumber;
        return $this;
    }

    /**
     * Sets initialCharge variable.
     *
     * @param \zaporylie\Vipps\Model\RecurringPayment\InitialCharge $initialCharge
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
     * @param \zaporylie\Vipps\Model\RecurringPayment\AgreementInterval $interval
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
    public function setIsApp($isApp)
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
    public function setMerchantAgreementUrl($merchantAgreementUrl)
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
    public function setMerchantRedirectUrl($merchantRedirectUrl)
    {
        $this->merchantRedirectUrl = $merchantRedirectUrl;
        return $this;
    }

    /**
     * Sets price variable.
     *
     * @param \zaporylie\Vipps\Model\RecurringPayment\Pricing
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
    public function setProductDescription($productDescription)
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
    public function setProductName($productName)
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
    public function setScope($scope)
    {
        $this->scope = $scope;
        return $this;
    }
}
