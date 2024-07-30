<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class Configuration
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $customerInteraction;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $elements;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\Countries
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\Countries")
     */
    protected $countries;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $userFlow;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    protected $requireUserInfo;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\CustomConsent
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\CustomConsent")
     */
    protected $customConsent;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    protected $showOrderSummary;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\ExternalPaymentMethod[]
     * @Serializer\Type("array<zaporylie\Vipps\Model\Checkout\v3\ExternalPaymentMethod>")
     */
    protected $externalPaymentMethods;

    /**
     * Sets countries variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\Countries $countries
     *
     * @return $this
     */
    public function setCountries(Countries $countries) {
        $this->countries = $countries;
        return $this;
    }

    /**
     * Sets customConsent variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\CustomConsent $customConsent
     *
     * @return $this
     */
    public function setCustomConsent(CustomConsent $customConsent) {
        $this->customConsent = $customConsent;
        return $this;
    }

    /**
     * Sets customerInteraction variable.
     *
     * @param string $customerInteraction
     *
     * @return $this
     */
    public function setCustomerInteraction(string $customerInteraction) {
        $this->customerInteraction = $customerInteraction;
        return $this;
    }

    /**
     * Sets elements variable.
     *
     * @param int $elements
     *
     * @return $this
     */
    public function setElements(int $elements) {
        $this->elements = $elements;
        return $this;
    }

    /**
     * Sets externalPaymentMethods variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\ExternalPaymentMethod[] $externalPaymentMethods
     *
     * @return $this
     */
    public function setExternalPaymentMethods(array $externalPaymentMethods) {
        $this->externalPaymentMethods = $externalPaymentMethods;
        return $this;
    }

    /**
     * Sets requireUserInfo variable.
     *
     * @param bool $requireUserInfo
     *
     * @return $this
     */
    public function setRequireUserInfo(bool $requireUserInfo) {
        $this->requireUserInfo = $requireUserInfo;
        return $this;
    }

    /**
     * Sets showOrderSummary variable.
     *
     * @param bool $showOrderSummary
     *
     * @return $this
     */
    public function setShowOrderSummary(bool $showOrderSummary) {
        $this->showOrderSummary = $showOrderSummary;
        return $this;
    }

    /**
     * Sets userFlow variable.
     *
     * @param string $userFlow
     *
     * @return $this
     */
    public function setUserFlow(string $userFlow) {
        $this->userFlow = $userFlow;
        return $this;
    }
}
