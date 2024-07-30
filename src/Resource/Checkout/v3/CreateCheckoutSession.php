<?php

namespace zaporylie\Vipps\Resource\Checkout\v3;

use zaporylie\Vipps\Model\Checkout\v3\CreateCheckoutSessionRequest;
use zaporylie\Vipps\Model\Checkout\v3\CreateCheckoutSessionResponse;
use zaporylie\Vipps\Resource\HttpMethod;
use zaporylie\Vipps\Resource\Payment\PaymentResourceBase;
use zaporylie\Vipps\VippsInterface;

/**
 * Class CreateCheckoutSession
 *
 * @package Vipps\Resource\Checkout
 */
class CreateCheckoutSession extends PaymentResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod
     */
    protected $method = HttpMethod::POST;

    /**
     * @var string
     */
    protected $path = 'checkout/v3/session';

    /**
     * InitiatePayment constructor.
     *
     * @param \zaporylie\Vipps\VippsInterface $vipps
     * @param string $subscription_key
     * @param \zaporylie\Vipps\Model\EPayment\v1\CreatePaymentRequest $request
     */
    public function __construct(VippsInterface $vipps, string $subscription_key, string $client_secret, CreateCheckoutSessionRequest $request)
    {
        parent::__construct($vipps, $subscription_key);

        // Checkout module requires client_id and client_secret headers.
        $this->headers['client_id'] = $this->app->getClient()->getClientId();
        $this->headers['client_secret'] = $client_secret;

        $this->body = $this
            ->getSerializer()
            ->serialize(
                $request,
                'json'
            );
    }

    /**
     * @return \zaporylie\Vipps\Model\Checkout\v3\CreateCheckoutSessionResponse
     */
    public function call()
    {
        $response = $this->makeCall();
        $body = $response->getBody()->getContents();
        /** @var \zaporylie\Vipps\Model\Checkout\v3\CreateCheckoutSessionResponse $responseObject */
        $responseObject = $this
            ->getSerializer()
            ->deserialize(
                $body,
                CreateCheckoutSessionResponse::class,
                'json'
            );

        return $responseObject;
    }
}
