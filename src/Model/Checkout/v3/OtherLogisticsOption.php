<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class OtherLogisticsOption
{

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\Amount
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\Amount")
     */
    protected $amount;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $title;

    /**
     * Default: OTHER.
     *
     * @var string
     * @Serializer\Type("string")
     */
    protected $brand;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $id;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $priority;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    protected $isDefault;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $description;
}
