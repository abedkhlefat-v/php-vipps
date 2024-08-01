<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class GetCheckoutSessionResponse
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $sessionId;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    protected $merchantSerialNumber;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $reference;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $sessionState;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    protected $paymentMethod;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\SubscriptionDetails
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\SubscriptionDetails")
     */
    protected $subscriptionDetails;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\WalletPaymentDetails
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\WalletPaymentDetails")
     */
    protected $paymentDetails;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\UserInfo
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\UserInfo")
     */
    protected $userInfo;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\ShippingDetails
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\ShippingDetails")
     */
    protected $shippingDetails;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\BillingDetails
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\BillingDetails")
     */
    protected $billingDetails;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    protected $customConsentProvided;

    /**
     * Gets merchantSerialNumber value.
     *
     * @return string|null
     */
    public function getMerchantSerialNumber(): ?string {
        return $this->merchantSerialNumber;
    }

    /**
     * Gets reference value.
     *
     * @return string
     */
    public function getReference(): string {
        return $this->reference;
    }

    /**
     * Gets paymentMethod value.
     *
     * @return string|null
     */
    public function getPaymentMethod(): ?string {
        return $this->paymentMethod;
    }

    /**
     * Gets billingDetails value.
     *
     * @return \zaporylie\Vipps\Model\Checkout\v3\BillingDetails
     */
    public function getBillingDetails(): BillingDetails {
        return $this->billingDetails;
    }

    /**
     * Gets paymentDetails value.
     *
     * @return \zaporylie\Vipps\Model\Checkout\v3\WalletPaymentDetails
     */
    public function getPaymentDetails(): WalletPaymentDetails {
        return $this->paymentDetails;
    }

    /**
     * Gets sessionId value.
     *
     * @return string
     */
    public function getSessionId(): string {
        return $this->sessionId;
    }

    /**
     * Gets sessionState value.
     *
     * @return string
     */
    public function getSessionState(): string {
        return $this->sessionState;
    }

    /**
     * Gets shippingDetails value.
     *
     * @return \zaporylie\Vipps\Model\Checkout\v3\ShippingDetails
     */
    public function getShippingDetails(): ShippingDetails {
        return $this->shippingDetails;
    }

    /**
     * Gets subscriptionDetails value.
     *
     * @return \zaporylie\Vipps\Model\Checkout\v3\SubscriptionDetails
     */
    public function getSubscriptionDetails(): SubscriptionDetails {
        return $this->subscriptionDetails;
    }

    /**
     * Gets userInfo value.
     *
     * @return \zaporylie\Vipps\Model\Checkout\v3\UserInfo
     */
    public function getUserInfo(): UserInfo {
        return $this->userInfo;
    }
}
