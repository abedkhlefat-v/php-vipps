<?php

namespace zaporylie\Vipps\Resource\RecurringPayment\v3;

use zaporylie\Vipps\ClientInterface;
use zaporylie\Vipps\Model\RecurringPayment\v3\ResponseGetAgreement;
use zaporylie\Vipps\Resource\HttpMethod;

/**
 * Class GetAgreement
 *
 * @package Vipps\Resource\RecurringPayment
 */
class GetAgreement extends RecurringPaymentResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod
     */
    protected $method = HttpMethod::GET;

    /**
     * @var string
     */
    protected $path = '/recurring/v3/agreements/{id}';

    /**
     * InitiatePayment constructor.
     *
     * @param \zaporylie\Vipps\ClientInterface $client
     * @param string $agreement_id
     */
    public function __construct(ClientInterface $client, string $agreement_id)
    {
        parent::__construct($client);
        $this->id = $agreement_id;
    }

    /**
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\ResponseGetAgreement
     */
    public function call()
    {
        $response = $this->makeCall();
        $body = $response->getBody()->getContents();
        /** @var \zaporylie\Vipps\Model\RecurringPayment\v3\ResponseGetAgreement $responseObject */
        $responseObject = $this
            ->getSerializer()
            ->deserialize(
                $body,
                ResponseGetAgreement::class,
                'json'
            );

        return $responseObject;
    }
}
