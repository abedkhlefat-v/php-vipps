<?php

namespace zaporylie\Vipps\Resource\RecurringPayment\v3;

use zaporylie\Vipps\Model\RecurringPayment\v3\RequestUpdateAgreement;
use zaporylie\Vipps\Resource\HttpMethod;
use zaporylie\Vipps\Resource\IdempotencyKeyFactory;
use zaporylie\Vipps\VippsInterface;

/**
 * Class UpdateAgreement
 *
 * @package Vipps\Resource\RecurringPayment
 */
class UpdateAgreement extends RecurringPaymentResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod
     */
    protected $method = HttpMethod::PATCH;

    /**
     * @var string
     */
    protected $path = '/recurring/v3/agreements/{id}';

    /**
     * InitiatePayment constructor.
     *
     * @param \zaporylie\Vipps\VippsInterface $vipps
     * @param string $subscription_key
     * @param string $agreement_id
     * @param string $idempotency_key
     * @param \zaporylie\Vipps\Model\RecurringPayment\v3\RequestUpdateAgreement $requestObject
     */
    public function __construct(
        VippsInterface $vipps,
        string $subscription_key,
        string $agreement_id,
        string $idempotency_key,
        RequestUpdateAgreement $requestObject
    ) {
        $this->headers['Idempotency-Key'] = $idempotency_key;
        parent::__construct($vipps, $subscription_key);
        $this->id = $agreement_id;
        $this->body = $this
            ->getSerializer()
            ->serialize(
                $requestObject,
                'json'
            );
    }

    /**
     * @return mixed
     */
    public function call()
    {
        $response = $this->makeCall();
        $body = $response->getBody()->getContents();
        return $body;
    }
}
