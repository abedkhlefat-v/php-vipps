<?php

namespace zaporylie\Vipps\Resource\EPayment\v1;

use zaporylie\Vipps\ClientInterface;
use zaporylie\Vipps\Model\EPayment\v1\PaymentAdjustResponse;
use zaporylie\Vipps\Model\EPayment\v1\RefundModificationRequest;
use zaporylie\Vipps\Resource\HttpMethod;
use zaporylie\Vipps\Resource\PaymentResourceBase;

/**
 * Class CancelPayment
 *
 * @package Vipps\Resource\Payment
 */
class RefundPayment extends PaymentResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod
     */
    protected $method = HttpMethod::POST;

    /**
     * @var string
     */
    protected $path = 'epayment/v1/payments/{id}/refund';

    /**
     * InitiatePayment constructor.
     *
     * @param \zaporylie\Vipps\ClientInterface $client
     * @param string $idempotency_key
     * @param \zaporylie\Vipps\Model\EPayment\v1\RefundModificationRequest $request
     */
    public function __construct(
        ClientInterface $client,
        string $idempotency_key,
        string $reference,
        RefundModificationRequest $request
    ) {
        parent::__construct($client);
        $this->headers['Idempotency-Key'] = $idempotency_key;
        $this->id = $reference;
        $this->body = $this
            ->getSerializer()
            ->serialize(
                $request,
                'json'
            );
    }

    /**
     * @return \zaporylie\Vipps\Model\EPayment\v1\PaymentAdjustResponse
     */
    public function call()
    {
        $response = $this->makeCall();
        $body = $response->getBody()->getContents();
        /** @var \zaporylie\Vipps\Model\EPayment\v1\PaymentAdjustResponse $responseObject */
        $responseObject = $this
            ->getSerializer()
            ->deserialize(
                $body,
                PaymentAdjustResponse::class,
                'json'
            );

        return $responseObject;
    }
}
