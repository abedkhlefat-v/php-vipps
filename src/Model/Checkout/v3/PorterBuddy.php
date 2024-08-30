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


    protected $origin;
}
