<?php

namespace zaporylie\Vipps\Resource\RecurringPayment\v3;

use zaporylie\Vipps\ClientInterface;
use zaporylie\Vipps\Model\RecurringPayment\v3\RequestRefundCharge;
use zaporylie\Vipps\Resource\HttpMethod;

/**
 * Class RefundCharge
 *
 * @package Vipps\Resource\RecurringPayment
 */
class RefundCharge extends RecurringPaymentResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod
     */
    protected $method = HttpMethod::POST;

    /**
     * @var string
     */
    protected $path = '/recurring/v3/agreements/{id}/charges/{charge_id}/refund';

    /**
     * RefundCharge constructor.
     *
     * @param \zaporylie\Vipps\ClientInterface $client
     * @param string $agreement_id
     * @param string $charge_id
     * @param string $idempotency_key
     * @param \zaporylie\Vipps\Model\RecurringPayment\v3\RequestRefundCharge $requestObject
     */
    public function __construct(
        ClientInterface $client,
        string $agreement_id,
        string $charge_id,
        string $idempotency_key,
        RequestRefundCharge $requestObject
    ) {
        $this->id = $agreement_id;
        $this->charge_id = $charge_id;
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
     * @return string
     */
    public function call()
    {
        $response = $this->makeCall();
        $body = $response->getBody()->getContents();
        return $body;
    }
}
