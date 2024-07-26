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
class DeleteWebhook extends AuthorizedResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod;
     */
    protected $method = HttpMethod::DELETE;

    /**
     * @var string
     */
    protected $path = '/webhooks/v1/webhooks/{id}';

    /**
     * GetToken constructor.
     *
     * @param \zaporylie\Vipps\VippsInterface $vipps
     * @param string $subscription_key
     * @param $reference
     */
    public function __construct(VippsInterface $vipps, $subscription_key, $reference)
    {
        parent::__construct($vipps, $subscription_key);
        $this->id = $reference;
    }

    /**
     * @return mixed
     */
    public function call()
    {
        $response = $this->makeCall();
        $body = $response->getBody()->getContents();
        return $body;
    }
}
