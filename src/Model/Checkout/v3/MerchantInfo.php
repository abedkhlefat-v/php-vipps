<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class MerchantInfo
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $callbackUrl;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $returnUrl;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $callbackAuthorizationToken;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $termsAndConditionsUrl;

    /**
     * Sets callbackAuthorizationToken variable.
     *
     * @param string $callbackAuthorizationToken
     *
     * @return $this
     */
    public function setCallbackAuthorizationToken(
        string $callbackAuthorizationToken
    ) {
        $this->callbackAuthorizationToken = $callbackAuthorizationToken;
        return $this;
    }

    /**
     * Sets callbackUrl variable.
     *
     * @param string $callbackUrl
     *
     * @return $this
     */
    public function setCallbackUrl(string $callbackUrl) {
        $this->callbackUrl = $callbackUrl;
        return $this;
    }

    /**
     * Sets returnUrl variable.
     *
     * @param string $returnUrl
     *
     * @return $this
     */
    public function setReturnUrl(string $returnUrl) {
        $this->returnUrl = $returnUrl;
        return $this;
    }

    /**
     * Sets termsAndConditionsUrl variable.
     *
     * @param string $termsAndConditionsUrl
     *
     * @return $this
     */
    public function setTermsAndConditionsUrl(string $termsAndConditionsUrl) {
        $this->termsAndConditionsUrl = $termsAndConditionsUrl;
        return $this;
    }
}
