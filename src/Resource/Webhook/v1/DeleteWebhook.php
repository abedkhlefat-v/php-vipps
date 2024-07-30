<?php

namespace zaporylie\Vipps\Resource\Webhook\v1;

use zaporylie\Vipps\ClientInterface;
use zaporylie\Vipps\Resource\AuthorizedResourceBase;
use zaporylie\Vipps\Resource\HttpMethod;

/**
 * Class Webhook
 *
 * @package Vipps\Resource\Webhook
 */
class DeleteWebhook extends AuthorizedResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod;
     */
    protected $method = HttpMethod::DELETE;

    /**
     * @var string
     */
    protected $path = '/webhooks/v1/webhooks/{id}';

    /**
     * GetToken constructor.
     *
     * @param \zaporylie\Vipps\ClientInterface $client
     * @param $reference
     */
    public function __construct(ClientInterface $client, $reference)
    {
        parent::__construct($client);
        $this->id = $reference;
    }

    /**
     * @return mixed
     */
    public function call()
    {
        $response = $this->makeCall();
        $body = $response->getBody()->getContents();
        return $body;
    }
}
