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
}
