<?php

namespace zaporylie\Vipps\Api\v1;

use zaporylie\Vipps\Model\EPayment\v1\CancelModificationRequest;
use zaporylie\Vipps\Model\EPayment\v1\CaptureModificationRequest;
use zaporylie\Vipps\Model\EPayment\v1\CreatePaymentRequest;
use zaporylie\Vipps\Model\EPayment\v1\CreatePaymentResponse;
use zaporylie\Vipps\Model\EPayment\v1\GetPaymentResponse;
use zaporylie\Vipps\Model\EPayment\v1\PaymentAdjustResponse;
use zaporylie\Vipps\Model\EPayment\v1\RefundModificationRequest;

interface EPaymentInterface
{

    /**
     * @param \zaporylie\Vipps\Model\EPayment\v1\CreatePaymentRequest $request
     * @param string $idempotency_key
     *
     * @return \zaporylie\Vipps\Model\EPayment\v1\CreatePaymentResponse
     */
    public function createPayment(CreatePaymentRequest $request, ?string $idempotency_key) : CreatePaymentResponse;

    /**
     * @param string $reference
     *
     * @return \zaporylie\Vipps\Model\EPayment\v1\GetPaymentResponse
     */
    public function getPayment(string $reference) : GetPaymentResponse;

    /**
     * @param string $reference
     *
     * @return \zaporylie\Vipps\Model\EPayment\v1\EventLog[]
     */
    public function getPaymentEvents(string $reference) : array;

    /**
     * @param string $reference
     * @param \zaporylie\Vipps\Model\EPayment\v1\CancelModificationRequest $request
     * @param string|null $idempotency_key
     *
     * @return \zaporylie\Vipps\Model\EPayment\v1\PaymentAdjustResponse
     */
    public function cancelPayment(
        string $reference,
        CancelModificationRequest $request,
        ?string $idempotency_key
    ) : PaymentAdjustResponse;

    /**
     * @param string $reference
     * @param \zaporylie\Vipps\Model\EPayment\v1\CaptureModificationRequest $request
     * @param string|null $idempotency_key
     *
     * @return \zaporylie\Vipps\Model\EPayment\v1\PaymentAdjustResponse
     */
    public function capturePayment(
        string $reference,
        CaptureModificationRequest $request,
        ?string $idempotency_key
    ) : PaymentAdjustResponse;

    /**
     * @param string $reference
     * @param \zaporylie\Vipps\Model\EPayment\v1\RefundModificationRequest $request
     * @param string|null $idempotency_key
     *
     * @return \zaporylie\Vipps\Model\EPayment\v1\PaymentAdjustResponse
     */
    public function refundPayment(
        string $reference,
        RefundModificationRequest $request,
        ?string $idempotency_key
    ) : PaymentAdjustResponse;
}
