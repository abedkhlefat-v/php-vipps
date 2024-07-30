<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class Logistics
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $dynamicOptionsCallback;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\OtherLogisticsOption[]
     * @Serializer\Type("array<zaporylie\Vipps\Model\Checkout\v3\OtherLogisticsOption>")
     */
    protected $fixedOptions;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\Integrations
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\Integrations")
     */
    protected $integrations;

}
