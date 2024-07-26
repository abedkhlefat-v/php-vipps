<?php

namespace zaporylie\Vipps\Resource\Webhook\v1;

use zaporylie\Vipps\Model\Authorization\ResponseGetToken;
use zaporylie\Vipps\Model\EPayment\v1\EventLog;
use zaporylie\Vipps\Model\Webhook\v1\GetWebhooksResponse;
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
     * @param \zaporylie\Vipps\VippsInterface $vipps
     * @param string $subscription_key
     */
    public function __construct(VippsInterface $vipps, $subscription_key)
    {
        parent::__construct($vipps, $subscription_key);
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
