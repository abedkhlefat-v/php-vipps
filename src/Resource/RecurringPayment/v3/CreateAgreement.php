<?php

namespace zaporylie\Vipps\Resource\RecurringPayment\v3;

use zaporylie\Vipps\Model\RecurringPayment\v3\RequestCreateAgreement;
use zaporylie\Vipps\Model\RecurringPayment\v3\ResponseCreateAgreement;
use zaporylie\Vipps\Resource\HttpMethod;
use zaporylie\Vipps\Resource\IdempotencyKeyFactory;
use zaporylie\Vipps\VippsInterface;

/**
 * Class CreateAgreement
 *
 * @package Vipps\Resource\RecurringPayment
 */
class CreateAgreement extends RecurringPaymentResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod
     */
    protected $method = HttpMethod::POST;

    /**
     * @var string
     */
    protected $path = '/recurring/v3/agreements';

    /**
     * InitiatePayment constructor.
     *
     * @param \zaporylie\Vipps\VippsInterface $vipps
     * @param string $subscription_key
     * @param string $idempotency_key
     * @param \zaporylie\Vipps\Model\RecurringPayment\v3\RequestCreateAgreement $requestObject
     */
    public function __construct(VippsInterface $vipps, string $subscription_key, string $idempotency_key, RequestCreateAgreement $requestObject)
    {
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
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\ResponseCreateAgreement
     */
    public function call()
    {
        $response = $this->makeCall();
        $body = $response->getBody()->getContents();
        /** @var \zaporylie\Vipps\Model\RecurringPayment\v3\ResponseCreateAgreement $responseObject */
        $responseObject = $this
            ->getSerializer()
            ->deserialize(
                $body,
                ResponseCreateAgreement::class,
                'json'
            );

        return $responseObject;
    }
}
