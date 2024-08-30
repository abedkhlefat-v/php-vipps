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
     * @var string
     * @Serializer\Type("string")
     */
    protected $state;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\Aggregate|null
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
    public function getAmount(): Amount
    {
        return $this->amount;
    }

    /**
     * Gets state value.
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * Gets aggregate value.
     *
     * @return \zaporylie\Vipps\Model\Checkout\v3\Aggregate|null
     */
    public function getAggregate(): ?Aggregate
    {
        return $this->aggregate;
    }

    /**
     * Gets type value.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
