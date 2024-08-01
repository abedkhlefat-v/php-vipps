<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class Configuration
{

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    protected $customerInteraction;

    /**
     * @var string|null
     * @Serializer\Type("integer")
     */
    protected $elements;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\Countries|null
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\Countries")
     */
    protected $countries;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    protected $userFlow;

    /**
     * @var bool|null
     * @Serializer\Type("boolean")
     */
    protected $requireUserInfo;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\CustomConsent|null
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\CustomConsent")
     */
    protected $customConsent;

    /**
     * @var bool|null
     * @Serializer\Type("boolean")
     */
    protected $showOrderSummary;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\ExternalPaymentMethod[]|null
     * @Serializer\Type("array<zaporylie\Vipps\Model\Checkout\v3\ExternalPaymentMethod>")
     */
    protected $externalPaymentMethods;

    /**
     * Sets userFlow variable.
     *
     * @param string|null $userFlow
     *
     * @return $this
     */
    public function setUserFlow(?string $userFlow) {
        $this->userFlow = $userFlow;
        return $this;
    }

    /**
     * Sets showOrderSummary variable.
     *
     * @param bool|null $showOrderSummary
     *
     * @return $this
     */
    public function setShowOrderSummary(?bool $showOrderSummary) {
        $this->showOrderSummary = $showOrderSummary;
        return $this;
    }

    /**
     * Sets requireUserInfo variable.
     *
     * @param bool|null $requireUserInfo
     *
     * @return $this
     */
    public function setRequireUserInfo(?bool $requireUserInfo) {
        $this->requireUserInfo = $requireUserInfo;
        return $this;
    }

    /**
     * Sets externalPaymentMethods variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\ExternalPaymentMethod[]|null $externalPaymentMethods
     *
     * @return $this
     */
    public function setExternalPaymentMethods(?array $externalPaymentMethods) {
        $this->externalPaymentMethods = $externalPaymentMethods;
        return $this;
    }

    /**
     * Sets elements variable.
     *
     * @param string|null $elements
     *
     * @return $this
     */
    public function setElements(?string $elements) {
        $this->elements = $elements;
        return $this;
    }

    /**
     * Sets customerInteraction variable.
     *
     * @param string|null $customerInteraction
     *
     * @return $this
     */
    public function setCustomerInteraction(?string $customerInteraction) {
        $this->customerInteraction = $customerInteraction;
        return $this;
    }

    /**
     * Sets customConsent variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\CustomConsent|null $customConsent
     *
     * @return $this
     */
    public function setCustomConsent(?CustomConsent $customConsent) {
        $this->customConsent = $customConsent;
        return $this;
    }

    /**
     * Sets countries variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\Countries|null $countries
     *
     * @return $this
     */
    public function setCountries(?Countries $countries) {
        $this->countries = $countries;
        return $this;
    }
}
