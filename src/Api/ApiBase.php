<?php

namespace zaporylie\Vipps\Api;

use zaporylie\Vipps\ClientInterface;
use zaporylie\Vipps\Exceptions\Api\InvalidArgumentException;

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

    /**
     * Gets subscription_key value.
     *
     * @return string
     */
    public function getSubscriptionKey()
    {
        if (empty($this->subscriptionKey)) {
            throw new InvalidArgumentException('Missing subscription key');
        }
        return $this->subscriptionKey;
    }

    /**
     * Sets subscription_key variable.
     *
     * @param string $subscriptionKey
     *
     * @return $this
     */
    public function setSubscriptionKey($subscriptionKey)
    {
        $this->subscriptionKey = $subscriptionKey;
        return $this;
    }
}
