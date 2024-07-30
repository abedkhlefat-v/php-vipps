<?php

namespace zaporylie\Vipps\Api\v3;

use zaporylie\Vipps\Api\ApiBase;
use zaporylie\Vipps\Api\v1\WebhookInterface;
use zaporylie\Vipps\Exceptions\Api\InvalidArgumentException;
use zaporylie\Vipps\Model\Checkout\v3\CreateCheckoutSessionRequest;
use zaporylie\Vipps\Model\Checkout\v3\CreateCheckoutSessionResponse;
use zaporylie\Vipps\Model\Checkout\v3\GetCheckoutSessionResponse;
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
use zaporylie\Vipps\Resource\Checkout\v3\CreateCheckoutSession;
use zaporylie\Vipps\Resource\Checkout\v3\GetCheckoutSession;
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
use zaporylie\Vipps\VippsInterface;

/**
 * Class Webhook
 *
 * @package Vipps\Api
 */
class Checkout extends ApiBase implements CheckoutInterface
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
     * @var string
     */
    protected $clientSecret;

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
     * @param \zaporylie\Vipps\VippsInterface $app
     * @param string $subscription_key
     * @param $merchant_serial_number
     */
    public function __construct(
        VippsInterface $app,
        string $subscription_key,
        string $merchant_serial_number,
        string $client_secret
    ) {
        parent::__construct($app, $subscription_key);
        $this->merchantSerialNumber = $merchant_serial_number;
        $this->version = 'v3';
        $this->clientSecret = $client_secret;
    }

    /**
     * {@inheritDoc}
     */
    public function createCheckoutSession(CreateCheckoutSessionRequest $request): CreateCheckoutSessionResponse
    {
        $resource = new CreateCheckoutSession($this->app, $this->getSubscriptionKey(), $this->clientSecret, $request);
        return $resource->call();
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckoutSession(string $reference): GetCheckoutSessionResponse
    {
        $resource = new GetCheckoutSession($this->app, $this->getSubscriptionKey(), $this->clientSecret, $reference);
        return $resource->call();
    }
}
