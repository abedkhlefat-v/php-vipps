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
