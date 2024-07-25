<?php

namespace zaporylie\Vipps\Model\EPayment\v1;

use JMS\Serializer\Annotation as Serializer;

class PaymentAdjustResponse
{

    /**
     * @var \zaporylie\Vipps\Model\EPayment\v1\Aggregate
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\v1\Aggregate")
     */
    protected $aggregate;

    /**
     * @var \zaporylie\Vipps\Model\EPayment\v1\Amount
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\v1\Amount")
     */
    protected $amount;

    /**
     * The status of the payment.
     *
     * Available values are: CREATED, ABORTED, EXPIRED, AUTHORIZED, TERMINATED.
     *
     * @var string
     * @Serializer\Type("string")
     */
    protected $state;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $pspReference;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $reference;

    /**
     * Gets aggregate value.
     *
     * @return \zaporylie\Vipps\Model\EPayment\v1\Aggregate
     */
    public function getAggregate(): Aggregate
    {
        return $this->aggregate;
    }

    /**
     * Gets amount value.
     *
     * @return \zaporylie\Vipps\Model\EPayment\v1\Amount
     */
    public function getAmount(): Amount
    {
        return $this->amount;
    }

    /**
     * Gets pspReference value.
     *
     * @return string
     */
    public function getPspReference(): string
    {
        return $this->pspReference;
    }

    /**
     * Gets reference value.
     *
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
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
}
