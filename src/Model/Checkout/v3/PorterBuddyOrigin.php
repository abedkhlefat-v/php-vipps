<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class PorterBuddyOrigin
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $name;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $email;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $phoneNumber;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\PorterBuddyOriginAddress
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\PorterBuddyOriginAddress")
     */
    protected $address;
}
