<?php

namespace zaporylie\Vipps\Api;

use zaporylie\Vipps\Resource\UserInfo\UserInfo as UserInfoResource;
use zaporylie\Vipps\ClientInterface;

/**
 * Class UserInfo
 *
 * @package Vipps\Api
 */
class UserInfo extends ApiBase implements UserInfoInterface
{

    /**
     * UserInfo constructor.
     *
     * @param \zaporylie\Vipps\ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * {@inheritdoc}
     */
    public function userInfo($sub)
    {
        $resource = new UserInfoResource($this->client, $sub);
        /** @var \zaporylie\Vipps\Model\UserInfo\ResponseUserInfo $response */
        $response = $resource->call();
        return $response;
    }
}
