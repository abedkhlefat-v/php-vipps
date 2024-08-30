<?php

namespace zaporylie\Vipps\Resource\RecurringPayment\v3;

use zaporylie\Vipps\ClientInterface;
use zaporylie\Vipps\Model\RecurringPayment\v3\RequestCreateAgreement;
use zaporylie\Vipps\Model\RecurringPayment\v3\ResponseCreateAgreement;
use zaporylie\Vipps\Resource\HttpMethod;

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
     * @param \zaporylie\Vipps\ClientInterface $client
     * @param string $idempotency_key
     * @param \zaporylie\Vipps\Model\RecurringPayment\v3\RequestCreateAgreement $requestObject
     */
    public function __construct(ClientInterface $client, string $idempotency_key, RequestCreateAgreement $requestObject)
    {
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
