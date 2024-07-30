<?php

namespace zaporylie\Vipps\Resource\RecurringPayment\v3;

use zaporylie\Vipps\Resource\HttpMethod;
use zaporylie\Vipps\Resource\IdempotencyKeyFactory;
use zaporylie\Vipps\VippsInterface;

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
     * @param \zaporylie\Vipps\VippsInterface $vipps
     * @param string $subscription_key
     * @param string $agreement_id
     * @param string $idempotency_key
     * @param string $charge_id
     */
    public function __construct(
        VippsInterface $vipps,
        string $subscription_key,
        string $agreement_id,
        string $idempotency_key,
        string $charge_id
    ) {
        $this->id = $agreement_id;
        $this->charge_id = $charge_id;
        $this->headers['Idempotency-Key'] = $idempotency_key;
        parent::__construct($vipps, $subscription_key);
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
