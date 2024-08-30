<?php

namespace zaporylie\Vipps\Api;

use zaporylie\Vipps\Model\Authorization\ResponseGetToken;
use zaporylie\Vipps\Resource\Authorization\GetToken;

class Authorization extends ApiBase implements AuthorizationInterface
{

    /**
     * {@inheritdoc}
     *
     * @return \zaporylie\Vipps\Model\Authorization\ResponseGetToken
     */
    public function getToken(): ResponseGetToken
    {
        // Initiate GetToken resource.
        $resource = new GetToken($this->client);

        /** @var \zaporylie\Vipps\Model\Authorization\ResponseGetToken $response */
        $response = $resource->call();

        // Save token on Client for future use.
        $this->client->getTokenStorage()->set($response);

        return $response;
    }
}
