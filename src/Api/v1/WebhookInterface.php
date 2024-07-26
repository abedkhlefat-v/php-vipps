<?php

namespace zaporylie\Vipps\Api\v1;

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

interface WebhookInterface
{

    /**
     * @param \zaporylie\Vipps\Model\Webhook\v1\RegisterWebhookRequest $request
     *
     * @return \zaporylie\Vipps\Model\Webhook\v1\RegisterWebhookResponse
     */
    public function registerWebhook(RegisterWebhookRequest $request) : RegisterWebhookResponse;

    /**
     * @return \zaporylie\Vipps\Model\Webhook\v1\GetWebhooksResponse
     */
    public function getWebhooks() : GetWebhooksResponse;

    /**
     * @param string $reference
     *
     * @return void
     */
    public function deleteWebhook(string $reference) : void;
}
