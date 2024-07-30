<?php

namespace zaporylie\Vipps\Resource\Webhook\v1;

use zaporylie\Vipps\ClientInterface;
use zaporylie\Vipps\Model\Webhook\v1\GetWebhooksResponse;
use zaporylie\Vipps\Resource\AuthorizedResourceBase;
use zaporylie\Vipps\Resource\HttpMethod;

/**
 * Class Webhook
 *
 * @package Vipps\Resource\Webhook
 */
class GetWebhooks extends AuthorizedResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod;
     */
    protected $method = HttpMethod::GET;

    /**
     * @var string
     */
    protected $path = '/webhooks/v1/webhooks';

    /**
     * GetToken constructor.
     *
     * @param \zaporylie\Vipps\ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        parent::__construct($client);
    }

    /**
     * @return \zaporylie\Vipps\Model\Webhook\v1\GetWebhooksResponse
     */
    public function call()
    {
        $response = $this->makeCall();
        /** @var \zaporylie\Vipps\Model\Webhook\v1\GetWebhooksResponse $responseObject */
        $responseObject = $this
            ->getSerializer()
            ->deserialize(
                $response->getBody()->getContents(),
                GetWebhooksResponse::class,
                'json'
            );

        return $responseObject;
    }
}
