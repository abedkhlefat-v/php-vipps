<?php

namespace zaporylie\Vipps\Resource\Checkout\v3;

use zaporylie\Vipps\ClientInterface;
use zaporylie\Vipps\Model\Checkout\v3\CreateCheckoutSessionRequest;
use zaporylie\Vipps\Model\Checkout\v3\CreateCheckoutSessionResponse;
use zaporylie\Vipps\Resource\HttpMethod;
use zaporylie\Vipps\Resource\PaymentResourceBase;

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
     * @param \zaporylie\Vipps\ClientInterface $client
     * @param \zaporylie\Vipps\Model\Checkout\v3\CreateCheckoutSessionRequest $request
     */
    public function __construct(ClientInterface $client, CreateCheckoutSessionRequest $request)
    {
        parent::__construct($client);

        // Checkout module requires client_id and client_secret headers.
        $this->headers['client_id'] = $this->client->getClientId();
        $this->headers['client_secret'] = $this->client->getClientSecret();

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
