<?php

namespace zaporylie\Vipps\Resource\RecurringPayment\v3;

use zaporylie\Vipps\Model\RecurringPayment\v3\RequestCaptureCharge;
use zaporylie\Vipps\Resource\HttpMethod;
use zaporylie\Vipps\Resource\IdempotencyKeyFactory;
use zaporylie\Vipps\VippsInterface;

/**
 * Class CaptureCharge
 *
 * @package Vipps\Resource\RecurringPayment
 */
class CaptureCharge extends RecurringPaymentResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod
     */
    protected $method = HttpMethod::POST;

    /**
     * @var string
     */
    protected $path = '/recurring/v2/agreements/{id}/charges/{charge_id}/capture';

    /**
     * InitiatePayment constructor.
     *
     * @param \zaporylie\Vipps\VippsInterface $vipps
     * @param string $subscription_key
     * @param string $agreement_id
     * @param string $idempotency_key
     * @param string $charge_id
     * @param \zaporylie\Vipps\Model\RecurringPayment\v3\RequestCaptureCharge $requestObject
     */
    public function __construct(
        VippsInterface $vipps,
        string $subscription_key,
        string $agreement_id,
        string $idempotency_key,
        string $charge_id,
        RequestCaptureCharge $requestObject
    ) {
        $this->id = $agreement_id;
        $this->charge_id = $charge_id;
        $this->headers['Idempotency-Key'] = $idempotency_key;
        parent::__construct($vipps, $subscription_key);
        $this->body = $this
            ->getSerializer()
            ->serialize(
                $requestObject,
                'json'
            );
    }

    /**
     * @return string
     */
    public function call()
    {
        $response = $this->makeCall();
        $body = $response->getBody()->getContents();
        return $body;
    }
}
