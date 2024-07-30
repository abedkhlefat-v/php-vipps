<?php

namespace zaporylie\Vipps\Resource\Checkout\v3;

use zaporylie\Vipps\Model\Checkout\v3\GetCheckoutSessionResponse;
use zaporylie\Vipps\Resource\HttpMethod;
use zaporylie\Vipps\Resource\PaymentResourceBase;
use zaporylie\Vipps\VippsInterface;

/**
 * Class CreateCheckoutSession
 *
 * @package Vipps\Resource\Checkout
 */
class GetCheckoutSession extends PaymentResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod
     */
    protected $method = HttpMethod::GET;

    /**
     * @var string
     */
    protected $path = 'checkout/v3/session/{id}';

    /**
     * InitiatePayment constructor.
     *
     * @param \zaporylie\Vipps\VippsInterface $vipps
     * @param string $subscription_key
     * @param string $reference
     */
    public function __construct(VippsInterface $vipps, string $subscription_key, string $client_secret, string $reference)
    {
        parent::__construct($vipps, $subscription_key);
        $this->id = $reference;

        // Checkout module requires client_id and client_secret headers.
        $this->headers['client_id'] = $this->app->getClient()->getClientId();
        $this->headers['client_secret'] = $client_secret;
    }

    /**
     * @return \zaporylie\Vipps\Model\Checkout\v3\GetCheckoutSessionResponse
     */
    public function call()
    {
        $response = $this->makeCall();
        $body = $response->getBody()->getContents();
        /** @var \zaporylie\Vipps\Model\Checkout\v3\GetCheckoutSessionResponse $responseObject */
        $responseObject = $this
            ->getSerializer()
            ->deserialize(
                $body,
                GetCheckoutSessionResponse::class,
                'json'
            );

        return $responseObject;
    }
}
