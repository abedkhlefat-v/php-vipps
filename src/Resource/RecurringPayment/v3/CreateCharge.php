<?php

namespace zaporylie\Vipps\Resource\RecurringPayment\v3;

use zaporylie\Vipps\ClientInterface;
use zaporylie\Vipps\Model\RecurringPayment\v3\RequestCreateCharge;
use zaporylie\Vipps\Model\RecurringPayment\v3\ResponseCreateCharge;
use zaporylie\Vipps\Resource\HttpMethod;

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
     * @param \zaporylie\Vipps\ClientInterface $client
     * @param string $agreement_id
     * @param string $idempotency_key
     * @param \zaporylie\Vipps\Model\RecurringPayment\v3\RequestCreateCharge $requestObject
     */
    public function __construct(
        ClientInterface $client,
        string $agreement_id,
        string $idempotency_key,
        RequestCreateCharge $requestObject
    ) {
        $this->id = $agreement_id;
        $this->headers['Idempotency-Key'] = $idempotency_key;
        parent::__construct($client);
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
