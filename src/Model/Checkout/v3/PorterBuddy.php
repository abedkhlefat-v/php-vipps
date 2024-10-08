<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class PorterBuddy
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $publicToken;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $apiKey;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\PorterBuddyOrigin
     * @Serializer\Type("\zaporylie\Vipps\Model\Checkout\v3\PorterBuddyOrigin")
     */
    protected $origin;

    /**
     * Sets apiKey variable.
     *
     * @param string $apiKey
     *
     * @return $this
     */
    public function setApiKey(string $apiKey) {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * Sets origin variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\PorterBuddyOrigin $origin
     *
     * @return $this
     */
    public function setOrigin(PorterBuddyOrigin $origin) {
        $this->origin = $origin;
        return $this;
    }

    /**
     * Sets publicToken variable.
     *
     * @param string $publicToken
     *
     * @return $this
     */
    public function setPublicToken(string $publicToken) {
        $this->publicToken = $publicToken;
        return $this;
    }
}
