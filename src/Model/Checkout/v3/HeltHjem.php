<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class HeltHjem
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $username;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $password;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $shopId;

    /**
     * Sets password variable.
     *
     * @param string $password
     *
     * @return $this
     */
    public function setPassword(string $password) {
        $this->password = $password;
        return $this;
    }

    /**
     * Sets shopId variable.
     *
     * @param int $shopId
     *
     * @return $this
     */
    public function setShopId(int $shopId) {
        $this->shopId = $shopId;
        return $this;
    }

    /**
     * Sets username variable.
     *
     * @param string $username
     *
     * @return $this
     */
    public function setUsername(string $username) {
        $this->username = $username;
        return $this;
    }
}
