<?php

namespace zaporylie\Vipps\Resource\RecurringPayment\v3;

use zaporylie\Vipps\ClientInterface;
use zaporylie\Vipps\Resource\HttpMethod;

/**
 * Class CancelCharge
 *
 * @package Vipps\Resource\RecurringPayment
 */
class CancelCharge extends RecurringPaymentResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod
     */
    protected $method = HttpMethod::DELETE;

    /**
     * @var string
     */
    protected $path = '/recurring/v3/agreements/{id}/charges/{charge_id}';

    /**
     * CancelCharge constructor.
     *
     * @param \zaporylie\Vipps\ClientInterface $client
     * @param string $agreement_id
     * @param string $idempotency_key
     * @param string $charge_id
     */
    public function __construct(
        ClientInterface $client,
        string $agreement_id,
        string $idempotency_key,
        string $charge_id
    ) {
        $this->id = $agreement_id;
        $this->charge_id = $charge_id;
        $this->headers['Idempotency-Key'] = $idempotency_key;
        parent::__construct($client);
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
