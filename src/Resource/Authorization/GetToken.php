<?php

namespace zaporylie\Vipps\Resource\Authorization;

use zaporylie\Vipps\ClientInterface;
use zaporylie\Vipps\Model\Authorization\ResponseGetToken;
use zaporylie\Vipps\Resource\ResourceBase;
use zaporylie\Vipps\Resource\HttpMethod;

/**
 * Class GetToken
 *
 * @package Vipps\Resource\Authorization
 */
class GetToken extends ResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod;
     */
    protected $method = HttpMethod::POST;

    /**
     * @var string
     */
    protected $path = '/accesstoken/get';

    /**
     * GetToken constructor.
     *
     * @param \zaporylie\Vipps\ClientInterface $client
     * @param string $subscription_key
     * @param string $client_secret
     */
    public function __construct(ClientInterface $client)
    {
        parent::__construct($client);
        // Authorization module requires client_id amd client_secret headers to
        // be set.
        $this->headers['client_id'] = $this->client->getClientId();
        $this->headers['client_secret'] = $this->client->getClientSecret();
    }

    /**
     * @return \zaporylie\Vipps\Model\Authorization\ResponseGetToken
     */
    public function call()
    {
        $response = $this->makeCall();
        /** @var \zaporylie\Vipps\Model\Authorization\ResponseGetToken $responseObject */
        $responseObject = $this
            ->getSerializer()
            ->deserialize(
                $response->getBody()->getContents(),
                ResponseGetToken::class,
                'json'
            );

        return $responseObject;
    }
}
