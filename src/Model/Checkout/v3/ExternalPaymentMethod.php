<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class ExternalPaymentMethod
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $paymentMethod;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $redirectUrl;

    /**
     * Sets paymentMethod variable.
     *
     * @param string $paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod(string $paymentMethod) {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * Sets redirectUrl variable.
     *
     * @param string $redirectUrl
     *
     * @return $this
     */
    public function setRedirectUrl(string $redirectUrl) {
        $this->redirectUrl = $redirectUrl;
        return $this;
    }
}
