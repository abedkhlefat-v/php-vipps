<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class CreateCheckoutSessionResponse
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $token;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $checkoutFrontendUrl;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $poolingUrl;

    /**
     * Gets checkoutFrontendUrl value.
     *
     * @return string
     */
    public function getCheckoutFrontendUrl(): string {
        return $this->checkoutFrontendUrl;
    }

    /**
     * Gets poolingUrl value.
     *
     * @return string
     */
    public function getPoolingUrl(): string {
        return $this->poolingUrl;
    }

    /**
     * Gets token value.
     *
     * @return string
     */
    public function getToken(): string {
        return $this->token;
    }

}
