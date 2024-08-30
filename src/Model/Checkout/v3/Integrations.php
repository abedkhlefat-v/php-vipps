<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class Integrations
{

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\PorterBuddy
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\PorterBuddy")
     */
    protected $porterbuddy;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\HeltHjem
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\HeltHjem")
     */
    protected $helthjem;
}
