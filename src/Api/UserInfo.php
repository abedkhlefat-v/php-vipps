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
