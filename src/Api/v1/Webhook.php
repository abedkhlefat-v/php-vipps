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
     * @var string
     */
    protected $merchantSerialNumber;

    /**
     * @var string
     */
    protected $version;

    /**
     * Gets merchantSerialNumber value.
     *
     * @return string
     */
    public function getMerchantSerialNumber()
    {
        if (empty($this->merchantSerialNumber)) {
            throw new InvalidArgumentException('Missing merchant serial number');
        }
        return $this->merchantSerialNumber;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Webhook constructor.
     *
     * Webhook API needs one extra param - merchant serial number.
     *
     * @param \zaporylie\Vipps\ClientInterface $client
     * @param string $subscription_key
     * @param $merchant_serial_number
     */
    public function __construct(
        ClientInterface $client,
        $subscription_key,
        $merchant_serial_number
    ) {
        parent::__construct($client, $subscription_key);
        $this->merchantSerialNumber = $merchant_serial_number;
        $this->version = 'v1';
    }

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
