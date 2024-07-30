<?php

namespace zaporylie\Vipps\Resource;

use zaporylie\Vipps\ClientInterface;

/**
 * Class AuthorizedResourceBase
 *
 * @package Vipps\Resource
 */
abstract class AuthorizedResourceBase extends ResourceBase
{

    /**
     * {@inheritdoc}
     *
     * In addition to setting Vipps this base class adds authorization header
     * to each request.
     */
    public function __construct(ClientInterface $client)
    {
        parent::__construct($client);
        $this->headers['Authorization'] =
                $this->client->getTokenStorage()->get()->getTokenType()
                .' '.
                $this->client->getTokenStorage()->get()->getAccessToken();
    }
}
