<?php

namespace zaporylie\Vipps\Api\v3;

use zaporylie\Vipps\Model\Checkout\v3\CreateCheckoutSessionRequest;
use zaporylie\Vipps\Model\Checkout\v3\CreateCheckoutSessionResponse;
use zaporylie\Vipps\Model\Checkout\v3\GetCheckoutSessionResponse;

interface CheckoutInterface
{

    /**
     * @param \zaporylie\Vipps\Model\Checkout\v3\CreateCheckoutSessionRequest $request
     *
     * @return \zaporylie\Vipps\Model\Checkout\v3\CreateCheckoutSessionResponse
     */
    public function createCheckoutSession(CreateCheckoutSessionRequest $request): CreateCheckoutSessionResponse;

    /**
     * @param string $reference
     *
     * @return \zaporylie\Vipps\Model\Checkout\v3\GetCheckoutSessionResponse
     */
    public function getCheckoutSession(string $reference): GetCheckoutSessionResponse;
}
