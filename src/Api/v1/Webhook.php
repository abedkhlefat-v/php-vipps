<?php

namespace zaporylie\Vipps\Api\v1;

use zaporylie\Vipps\Api\ApiBase;
use zaporylie\Vipps\Exceptions\Api\InvalidArgumentException;
use zaporylie\Vipps\Model\EPayment\v1\CancelModificationRequest;
use zaporylie\Vipps\Model\EPayment\v1\CaptureModificationRequest;
use zaporylie\Vipps\Model\EPayment\v1\CreatePaymentRequest;
use zaporylie\Vipps\Model\EPayment\v1\CreatePaymentResponse;
use zaporylie\Vipps\Model\EPayment\v1\GetPaymentResponse;
use zaporylie\Vipps\Model\EPayment\v1\PaymentAdjustResponse;
use zaporylie\Vipps\Model\EPayment\v1\RefundModificationRequest;
use zaporylie\Vipps\Model\Webhook\v1\GetWebhooksResponse;
use zaporylie\Vipps\Model\Webhook\v1\RegisterWebhookRequest;
use zaporylie\Vipps\Model\Webhook\v1\RegisterWebhookResponse;
use zaporylie\Vipps\Resource\EPayment\v1\CapturePayment;
use zaporylie\Vipps\Resource\EPayment\v1\CreatePayment;
use zaporylie\Vipps\Resource\EPayment\v1\GetPayment;
use zaporylie\Vipps\Resource\EPayment\v1\GetPaymentEvents;
use zaporylie\Vipps\Resource\EPayment\v1\CancelPayment;
use zaporylie\Vipps\Resource\EPayment\v1\RefundPayment;
use zaporylie\Vipps\Resource\IdempotencyKeyFactory;
use zaporylie\Vipps\Resource\Webhook\v1\DeleteWebhook;
use zaporylie\Vipps\Resource\Webhook\v1\GetWebhooks;
use zaporylie\Vipps\Resource\Webhook\v1\RegisterWebhook;
use zaporylie\Vipps\ClientInterface;

/**
 * Class Webhook
 *
 * @package Vipps\Api
 */
class Webhook extends ApiBase implements WebhookInterface
{

    /**
     * {@inheritDoc}
     */
    public function registerWebhook(RegisterWebhookRequest $request): RegisterWebhookResponse
    {
        $resource = new RegisterWebhook($this->client, $request);
        return $resource->call();
    }

    /**
     * {@inheritDoc}
     */
    public function getWebhooks(): GetWebhooksResponse
    {
        $resource = new GetWebhooks($this->client);
        return $resource->call();
    }

    /**
     * {@inheritDoc}
     */
    public function deleteWebhook(string $reference): void
    {
        $resource = new DeleteWebhook($this->client, $reference);
        $resource->call();
    }
}
