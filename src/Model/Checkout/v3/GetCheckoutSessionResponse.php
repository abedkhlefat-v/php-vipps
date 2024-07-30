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
     * @var string
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
     * @var string
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

    protected $shippingDetails;

    protected $billingDetails;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    protected $customConsentProvided;
}
