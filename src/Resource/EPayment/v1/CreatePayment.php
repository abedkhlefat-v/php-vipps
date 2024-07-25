<?php

namespace zaporylie\Vipps\Resource\EPayment\v1;

use zaporylie\Vipps\Model\EPayment\v1\CreatePaymentRequest;
use zaporylie\Vipps\Model\EPayment\v1\CreatePaymentResponse;
use zaporylie\Vipps\Resource\HttpMethod;
use zaporylie\Vipps\Resource\IdempotencyKeyFactory;
use zaporylie\Vipps\Resource\Payment\PaymentResourceBase;
use zaporylie\Vipps\VippsInterface;

/**
 * Class CreatePayment
 *
 * @package Vipps\Resource\Payment
 */
class CreatePayment extends PaymentResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod
     */
    protected $method = HttpMethod::POST;

    /**
     * @var string
     */
    protected $path = 'epayment/v1/payments';

    /**
     * InitiatePayment constructor.
     *
     * @param \zaporylie\Vipps\VippsInterface $vipps
     * @param string $subscription_key
     * @param string $idempotency_key
     * @param \zaporylie\Vipps\Model\EPayment\v1\CreatePaymentRequest $request
     */
    public function __construct(VippsInterface $vipps, string $subscription_key, string $idempotency_key, CreatePaymentRequest $request)
    {
        parent::__construct($vipps, $subscription_key);
        $this->headers['Idempotency-Key'] = $idempotency_key;
        $this->body = $this
            ->getSerializer()
            ->serialize(
                $request,
                'json'
            );
    }

    /**
     * @return \zaporylie\Vipps\Model\Payment\ResponseInitiatePayment
     */
    public function call()
    {
        $response = $this->makeCall();
        $body = $response->getBody()->getContents();
        /** @var \zaporylie\Vipps\Model\Payment\ResponseInitiatePayment $responseObject */
        $responseObject = $this
            ->getSerializer()
            ->deserialize(
                $body,
                CreatePaymentResponse::class,
                'json'
            );

        return $responseObject;
    }
}
