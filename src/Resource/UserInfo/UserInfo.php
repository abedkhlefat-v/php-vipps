<?php

namespace zaporylie\Vipps\Resource\UserInfo;

use JMS\Serializer\SerializerBuilder;
use zaporylie\Vipps\ClientInterface;
use zaporylie\Vipps\Model\UserInfo\ResponseUserInfo;
use zaporylie\Vipps\Resource\AuthorizedResourceBase;
use zaporylie\Vipps\Resource\HttpMethod;

/**
 * Class UserInfo
 *
 * @package zaporylie\Vipps\Resource\UserInfo
 */
class UserInfo extends AuthorizedResourceBase
{

    /**
     * @var \zaporylie\Vipps\Resource\HttpMethod
     */
    protected $method = HttpMethod::GET;

    /**
     * @var string
     */
    protected $path = '/vipps-userinfo-api/userinfo/{id}';

    /**
     * AbstractResource constructor.
     *
     * @param \zaporylie\Vipps\ClientInterface $client
     * @param string $sub
     */
    public function __construct(ClientInterface $client, string $sub)
    {
        $this->client = $client;
        // Initiate serializer.
        $this->serializer = SerializerBuilder::create()
            ->build();
        $this->id = $sub;
        $this->headers['Authorization'] =
            $this->client->getTokenStorage()->get()->getTokenType()
            .' '.
            $this->client->getTokenStorage()->get()->getAccessToken();
    }

    /**
     * @return \zaporylie\Vipps\Model\UserInfo\ResponseUserInfo
     */
    public function call()
    {
        $response = $this->makeCall();
        $body = $response->getBody()->getContents();
        /** @var \zaporylie\Vipps\Model\UserInfo\ResponseUserInfo $responseObject */
        $responseObject = $this
            ->getSerializer()
            ->deserialize(
                $body,
                ResponseUserInfo::class,
                'json'
            );

        return $responseObject;
    }
}
