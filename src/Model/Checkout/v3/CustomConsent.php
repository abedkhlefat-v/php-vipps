<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class CustomConsent
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $text;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    protected $required;

    /**
     * Sets required variable.
     *
     * @param bool $required
     *
     * @return $this
     */
    public function setRequired(bool $required) {
        $this->required = $required;
        return $this;
    }

    /**
     * Sets text variable.
     *
     * @param string $text
     *
     * @return $this
     */
    public function setText(string $text) {
        $this->text = $text;
        return $this;
    }
}
