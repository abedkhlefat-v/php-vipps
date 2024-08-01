<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class WalletPaymentDetails
{

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\Amount
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\Amount")
     */
    protected $amount;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $state;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\Aggregate
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\Aggregate")
     */
    protected $aggregate;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $type;

    /**
     * Gets amount value.
     *
     * @return \zaporylie\Vipps\Model\Checkout\v3\Amount
     */
    public function getAmount(): Amount {
        return $this->amount;
    }

    /**
     * Gets state value.
     *
     * @return int
     */
    public function getState(): int {
        return $this->state;
    }

    /**
     * Gets aggregate value.
     *
     * @return \zaporylie\Vipps\Model\Checkout\v3\Aggregate
     */
    public function getAggregate(): Aggregate {
        return $this->aggregate;
    }

    /**
     * Gets type value.
     *
     * @return string
     */
    public function getType(): string {
        return $this->type;
    }
}
