<?php

namespace zaporylie\Vipps\Model\EPayment\v1;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Profile
 *
 * @package Vipps\Model\EPayment
 */
class ProfileResponse
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $sub;

    /**
     * Gets sub value.
     *
     * @return string
     */
    public function getSub(): string
    {
        return $this->sub;
    }
}
