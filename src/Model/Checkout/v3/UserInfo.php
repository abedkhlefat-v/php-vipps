<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class UserInfo
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $sub;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $email;

    /**
     * Gets sub value.
     *
     * @return string
     */
    public function getSub(): string
    {
        return $this->sub;
    }

    /**
     * Gets email value.
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
}
