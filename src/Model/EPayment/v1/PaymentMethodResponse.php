<?php

namespace zaporylie\Vipps\Model\EPayment\v1;

use JMS\Serializer\Annotation as Serializer;

class PaymentMethodResponse {

    /**
     * The type of the payment method.
     *
     * Available values are: WALLET, CARD.
     *
     * @var string
     * @Serializer\Type("string")
     */
    protected $type;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $cardBin;

    /**
     * Gets type value.
     *
     * @return string
     */
    public function getType(): string {
        return $this->type;
    }

    /**
     * Gets cardBin value.
     *
     * @return string
     */
    public function getCardBin(): string {
        return $this->cardBin;
    }
}
