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
}
