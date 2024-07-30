<?php

namespace zaporylie\Vipps\Resource\RecurringPayment\v3;

use zaporylie\Vipps\Model\RecurringPayment\v3\RequestCreateCharge;
use zaporylie\Vipps\Model\RecurringPayment\v3\ResponseCreateCharge;
use zaporylie\Vipps\Resource\HttpMethod;
use zaporylie\Vipps\Resource\IdempotencyKeyFactory;
use zaporylie\Vipps\VippsInterface;

/**
 * Class CreateCharge
 *
 * @package Vipps\Resource\RecurringPayment
 */
class CreateCharge extends RecurringPaymentResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod
     */
    protected $method = HttpMethod::POST;

    /**
     * @var string
     */
    protected $path = '/recurring/v3/agreements/{id}/charges';

    /**
     * InitiatePayment constructor.
     *
     * @param \zaporylie\Vipps\VippsInterface $vipps
     * @param string $subscription_key
     * @param string $agreementId
     * @param string $idempotency_key
     * @param \zaporylie\Vipps\Model\RecurringPayment\v3\RequestCreateCharge $requestObject
     */
    public function __construct(
        VippsInterface $vipps,
        string $subscription_key,
        string $agreementId,
        string $idempotency_key,
        RequestCreateCharge $requestObject
    ) {
        $this->id = $agreementId;
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
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\ResponseCreateCharge
     */
    public function call()
    {
        $response = $this->makeCall();
        $body = $response->getBody()->getContents();
        /** @var \zaporylie\Vipps\Model\RecurringPayment\v3\ResponseCreateCharge $responseObject */
        $responseObject = $this
            ->getSerializer()
            ->deserialize(
                $body,
                ResponseCreateCharge::class,
                'json'
            );

        return $responseObject;
    }
}
