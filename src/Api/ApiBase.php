<?php

namespace zaporylie\Vipps\Api;

use zaporylie\Vipps\ClientInterface;

abstract class ApiBase
{

    /**
     * @var \zaporylie\Vipps\ClientInterface
     */
    protected $client;

    /**
     * ApiBase constructor.
     *
     * @param \zaporylie\Vipps\ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }
}
