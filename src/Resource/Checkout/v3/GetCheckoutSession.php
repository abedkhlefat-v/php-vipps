<?php

namespace zaporylie\Vipps\Resource\Checkout\v3;

use zaporylie\Vipps\ClientInterface;
use zaporylie\Vipps\Model\Checkout\v3\GetCheckoutSessionResponse;
use zaporylie\Vipps\Resource\HttpMethod;
use zaporylie\Vipps\Resource\PaymentResourceBase;

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
     * @param \zaporylie\Vipps\ClientInterface $client
     * @param string $reference
     */
    public function __construct(ClientInterface $client, string $reference)
    {
        parent::__construct($client);
        $this->id = $reference;

        // Checkout module requires client_id and client_secret headers.
        $this->headers['client_id'] = $this->client->getClientId();
        $this->headers['client_secret'] = $this->client->getClientSecret();
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
