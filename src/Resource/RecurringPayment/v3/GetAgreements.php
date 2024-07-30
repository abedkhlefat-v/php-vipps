<?php

namespace zaporylie\Vipps\Resource\RecurringPayment\v3;

use zaporylie\Vipps\Model\RecurringPayment\v3\ResponseGetAgreement;
use zaporylie\Vipps\Resource\HttpMethod;

/**
 * Class GetAgreements
 *
 * @package Vipps\Resource\RecurringPayment
 */
class GetAgreements extends RecurringPaymentResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod
     */
    protected $method = HttpMethod::GET;

    /**
     * @var string
     */
    protected $path = '/recurring/v3/agreements';

    /**
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\ResponseGetAgreement[]
     */
    public function call()
    {
        $response = $this->makeCall();
        $body = $response->getBody()->getContents();
        /** @var \zaporylie\Vipps\Model\RecurringPayment\v3\ResponseGetAgreement[] $responseObject */
        $responseObject = $this
            ->getSerializer()
            ->deserialize(
                $body,
                sprintf("array<%s>", ResponseGetAgreement::class),
                'json'
            );

        return $responseObject;
    }
}
