<?php

namespace zaporylie\Vipps\Resource\RecurringPayment\v3;

use zaporylie\Vipps\Model\RecurringPayment\v3\Charge;
use zaporylie\Vipps\Model\RecurringPayment\v3\ResponseGetCharge;
use zaporylie\Vipps\Resource\HttpMethod;

/**
 * Class GetCharge
 *
 * @package Vipps\Resource\RecurringPayment
 */
class GetCharge extends RecurringPaymentResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod
     */
    protected $method = HttpMethod::GET;

    /**
     * @var string
     */
    protected $path = '/recurring/v3/agreements/{id}/charges/{charge_id}';

    /**
     * @param \zaporylie\Vipps\VippsInterface $vipps
     * @param string $subscription_key
     * @param string $agreement_id
     * @param string $charge_id
     */
    public function __construct(
        \zaporylie\Vipps\VippsInterface $vipps,
        string $subscription_key,
        string $agreement_id,
        string $charge_id
    ) {
        parent::__construct($vipps, $subscription_key);
        $this->id = $agreement_id;
        $this->charge_id = $charge_id;
    }

    /**
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\ResponseGetCharge
     */
    public function call()
    {
        $response = $this->makeCall();
        $body = $response->getBody()->getContents();
        /** @var \zaporylie\Vipps\Model\RecurringPayment\v3\ResponseGetCharge $responseObject */
        $responseObject = $this
            ->getSerializer()
            ->deserialize(
                $body,
                ResponseGetCharge::class,
                'json'
            );

        return $responseObject;
    }
}
