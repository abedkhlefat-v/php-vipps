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
use zaporylie\Vipps\Resource\EPayment\v1\CapturePayment;
use zaporylie\Vipps\Resource\EPayment\v1\CreatePayment;
use zaporylie\Vipps\Resource\EPayment\v1\GetPayment;
use zaporylie\Vipps\Resource\EPayment\v1\GetPaymentEvents;
use zaporylie\Vipps\Resource\EPayment\v1\CancelPayment;
use zaporylie\Vipps\Resource\EPayment\v1\RefundPayment;
use zaporylie\Vipps\Resource\IdempotencyKeyFactory;
use zaporylie\Vipps\ClientInterface;

/**
 * Class EPayment
 *
 * @package Vipps\Api
 */
class EPayment extends ApiBase implements EPaymentInterface
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
     * Payment constructor.
     *
     * Payments API needs one extra param - merchant serial number.
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
    public function createPayment(CreatePaymentRequest $request, ?string $idempotency_key = null): CreatePaymentResponse
    {
        // Ensure idempotency key is set.
        $idempotency_key = $idempotency_key ?? IdempotencyKeyFactory::generate();
        // @todo: Validate data.
        $resource = new CreatePayment($this->client, $idempotency_key, $request);
        return $resource->call();
    }

    /**
     * {@inheritDoc}
     */
    public function getPayment(string $reference): GetPaymentResponse
    {
        $resource = new GetPayment($this->client, $reference);
        return $resource->call();
    }

    /**
     * {@inheritDoc}
     */
    public function getPaymentEvents(string $reference): array
    {
        $resource = new GetPaymentEvents($this->client, $reference);
        return $resource->call();
    }

    /**
     * {@inheritDoc}
     */
    public function cancelPayment(
        string $reference,
        CancelModificationRequest $request,
        ?string $idempotency_key = null
    ): PaymentAdjustResponse {
        // Ensure idempotency key is set.
        $idempotency_key = $idempotency_key ?? IdempotencyKeyFactory::generate();
        $resource = new CancelPayment($this->client, $idempotency_key, $reference, $request);
        return $resource->call();
    }

    public function capturePayment(
        string $reference,
        CaptureModificationRequest $request,
        ?string $idempotency_key = null
    ): PaymentAdjustResponse {
        // Ensure idempotency key is set.
        $idempotency_key = $idempotency_key ?? IdempotencyKeyFactory::generate();
        $resource = new CapturePayment($this->client, $idempotency_key, $reference, $request);
        return $resource->call();
    }

    public function refundPayment(
        string $reference,
        RefundModificationRequest $request,
        ?string $idempotency_key = null
    ): PaymentAdjustResponse {
        // Ensure idempotency key is set.
        $idempotency_key = $idempotency_key ?? IdempotencyKeyFactory::generate();
        $resource = new RefundPayment($this->client, $idempotency_key, $reference, $request);
        return $resource->call();
    }
}
