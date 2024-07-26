<?php

namespace zaporylie\Vipps\Resource\Webhook\v1;

use zaporylie\Vipps\Model\Authorization\ResponseGetToken;
use zaporylie\Vipps\Model\EPayment\v1\EventLog;
use zaporylie\Vipps\Model\Webhook\v1\RegisterWebhookRequest;
use zaporylie\Vipps\Model\Webhook\v1\RegisterWebhookResponse;
use zaporylie\Vipps\Model\Webhook\v1\Webhook;
use zaporylie\Vipps\Resource\AuthorizedResourceBase;
use zaporylie\Vipps\Resource\ResourceBase;
use zaporylie\Vipps\Resource\HttpMethod;
use zaporylie\Vipps\VippsInterface;

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
     * @param \zaporylie\Vipps\VippsInterface $vipps
     * @param string $subscription_key
     */
    public function __construct(VippsInterface $vipps, $subscription_key, RegisterWebhookRequest $request)
    {
        parent::__construct($vipps, $subscription_key);
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
