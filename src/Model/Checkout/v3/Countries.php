<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class Countries
{

    /**
     * @var array
     * @Serializer\Type("array")
     */
    protected $supported;

    /**
     * Sets supported variable.
     *
     * @param array $supported
     *
     * @return $this
     */
    public function setSupported(array $supported)
    {
        $this->supported = $supported;
        return $this;
    }
}
