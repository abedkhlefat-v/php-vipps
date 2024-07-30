<?php

namespace zaporylie\Vipps\Resource\RecurringPayment\v3;

use zaporylie\Vipps\Model\RecurringPayment\v3\Charge;
use zaporylie\Vipps\Resource\HttpMethod;

/**
 * Class GetCharges
 *
 * @package Vipps\Resource\RecurringPayment
 */
class GetCharges extends RecurringPaymentResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod
     */
    protected $method = HttpMethod::GET;

    /**
     * @var string
     */
    protected $path = '/recurring/v3/agreements/{id}/charges';

    /**
     * @param \zaporylie\Vipps\VippsInterface $vipps
     * @param string $subscription_key
     * @param string $agreement_id
     */
    public function __construct(
        \zaporylie\Vipps\VippsInterface $vipps,
        string $subscription_key,
        string $agreement_id
    ) {
        parent::__construct($vipps, $subscription_key);
        $this->id = $agreement_id;
    }

    /**
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\Charge[]
     */
    public function call()
    {
        $response = $this->makeCall();
        $body = $response->getBody()->getContents();
        /** @var \zaporylie\Vipps\Model\RecurringPayment\v3\Charge[] $responseObject */
        $responseObject = $this
            ->getSerializer()
            ->deserialize(
                $body,
                sprintf("array<%s>", Charge::class),
                'json'
            );

        return $responseObject;
    }
}
