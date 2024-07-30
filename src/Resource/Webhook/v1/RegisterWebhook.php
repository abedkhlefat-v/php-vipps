<?php

namespace zaporylie\Vipps\Resource\Webhook\v1;

use zaporylie\Vipps\ClientInterface;
use zaporylie\Vipps\Model\Webhook\v1\RegisterWebhookRequest;
use zaporylie\Vipps\Model\Webhook\v1\RegisterWebhookResponse;
use zaporylie\Vipps\Resource\AuthorizedResourceBase;
use zaporylie\Vipps\Resource\HttpMethod;

/**
 * Class Webhook
 *
 * @package Vipps\Resource\Webhook
 */
class RegisterWebhook extends AuthorizedResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod;
     */
    protected $method = HttpMethod::POST;

    /**
     * @var string
     */
    protected $path = '/webhooks/v1/webhooks';

    /**
     * GetToken constructor.
     *
     * @param \zaporylie\Vipps\ClientInterface $client
     */
    public function __construct(ClientInterface $client, RegisterWebhookRequest $request)
    {
        parent::__construct($client);
        $this->body = $this
            ->getSerializer()
            ->serialize(
                $request,
                'json'
            );
        // This is important bit for making webhooks api not to fail.
        $this->headers['Content-Type'] = 'application/json';
    }

    /**
     * @return \zaporylie\Vipps\Model\Webhook\v1\RegisterWebhookResponse
     */
    public function call()
    {
        $response = $this->makeCall();
        /** @var \zaporylie\Vipps\Model\Webhook\v1\RegisterWebhookResponse $responseObject */
        $responseObject = $this
            ->getSerializer()
            ->deserialize(
                $response->getBody()->getContents(),
                RegisterWebhookResponse::class,
                'json'
            );

        return $responseObject;
    }
}
