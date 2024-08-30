<?php

namespace zaporylie\Vipps\Model\EPayment\v1;

use JMS\Serializer\Annotation as Serializer;

class GetPaymentResponse
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
     * @var \zaporylie\Vipps\Model\EPayment\v1\PaymentMethodResponse
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\v1\PaymentMethodResponse")
     */
    protected $paymentMethod;

    /**
     * @var \zaporylie\Vipps\Model\EPayment\v1\ProfileResponse
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\v1\ProfileResponse")
     */
    protected $profile;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $pspReference;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $redirectUrl;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $reference;

    /**
     * @var array
     * @Serializer\Type("array")
     */
    protected $metadata;

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
     * Gets paymentMethod value.
     *
     * @return \zaporylie\Vipps\Model\EPayment\v1\PaymentMethodResponse
     */
    public function getPaymentMethod(): PaymentMethodResponse
    {
        return $this->paymentMethod;
    }

    /**
     * Gets profile value.
     *
     * @return \zaporylie\Vipps\Model\EPayment\v1\ProfileResponse
     */
    public function getProfile(): ProfileResponse
    {
        return $this->profile;
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
     * Gets redirectUrl value.
     *
     * @return string
     */
    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
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

    /**
     * Gets metadata value.
     *
     * @return array
     */
    public function getMetadata(): array
    {
        return $this->metadata;
    }
}
