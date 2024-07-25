<?php

namespace zaporylie\Vipps\Resource\EPayment\v1;

use zaporylie\Vipps\Model\EPayment\v1\EventLog;
use zaporylie\Vipps\Resource\HttpMethod;
use zaporylie\Vipps\Resource\Payment\PaymentResourceBase;
use zaporylie\Vipps\VippsInterface;

class GetPaymentEvents extends PaymentResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod
     */
    protected $method = HttpMethod::GET;

    /**
     * @var string
     */
    protected $path = '/epayment/v1/payments/{id}/events';

    /**
     * InitiatePayment constructor.
     *
     * @param \zaporylie\Vipps\VippsInterface $vipps
     * @param string $subscription_key
     * @param string $reference
     */
    public function __construct(VippsInterface $vipps, string $subscription_key, string $reference)
    {
        parent::__construct($vipps, $subscription_key);
        $this->id = $reference;
    }

    /**
     * @return \zaporylie\Vipps\Model\EPayment\v1\EventLog[]
     */
    public function call()
    {
        $response = $this->makeCall();
        $body = $response->getBody()->getContents();
        /** @var \zaporylie\Vipps\Model\EPayment\v1\EventLog[] $responseObject */
        $responseObject = $this
            ->getSerializer()
            ->deserialize(
                $body,
                sprintf("array<%s>", EventLog::class),
                'json'
            );

        return $responseObject;
    }
}
