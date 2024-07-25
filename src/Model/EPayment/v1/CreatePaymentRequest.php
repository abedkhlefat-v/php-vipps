<?php

namespace zaporylie\Vipps\Model\EPayment\v1;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class CreatePaymentRequest
 *
 * @package Vipps\Model\EPayment
 */
class CreatePaymentRequest
{

    /**
     * @var \zaporylie\Vipps\Model\EPayment\v1\Amount
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\v1\Amount")
     */
    protected $amount;

    /**
     * @var \zaporylie\Vipps\Model\EPayment\v1\Customer|null
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\v1\Customer|null")
     */
    protected $customer;

    /**
     * Type of customer interaction.
     *
     * Available values are: CUSTOMER_PRESENT, CUSTOMER_NOT_PRESENT.
     * Default: CUSTOMER_NOT_PRESENT.
     *
     * @var string
     * @Serializer\Type("string")
     */
    protected $customerInteraction;

    /**
     * @var \zaporylie\Vipps\Model\EPayment\v1\IndustryData
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\v1\IndustryData")
     */
    protected $industryData;

    /**
     * @var \zaporylie\Vipps\Model\EPayment\v1\PaymentMethod
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\v1\PaymentMethod")
     */
    protected $paymentMethod;

    /**
     * @var \zaporylie\Vipps\Model\EPayment\v1\Profile
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\v1\Profile")
     */
    protected $profile;

    /**
     * Between 8 and 50 characters: ^[a-zA-Z0-9-]{8,50}$
     *
     * @var string
     * @Serializer\Type("string")
     */
    protected $reference;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $returnUrl;

    /**
     * The flow for bringing the user to the Vipps app.
     *
     * Available values are: PUSH_MESSAGE, NATIVE_REDIRECT, WEB_REDIRECT, QR.
     *
     * @var string
     * @Serializer\Type("string")
     */
    protected $userFlow;

    /**
     * The payment will expire at the given date and time.
     *
     * The format must adhere to RFC 3339. The value must be more than 10 minutes
     * and less than 28 days in the future. Can only be combined with userFlow:
     * PUSH_MESSAGE or userFlow: QR. If ExpiresAt is set, receipt also has to be
     * set.
     * ^((?:(\d{4}-\d{2}-\d{2})(T|t)(\d{2}:\d{2}:\d{2}(?:\.\d+)?))(Z|z|([+-](?:2[0-3]|[01][0-9]):[0-5][0-9])))$

     *
     * @var \DateTimeInterface|null
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:s.u\Z'>")
     */
    protected $expiresAt;

    /**
     * @var \zaporylie\Vipps\Model\EPayment\v1\QrFormat
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\v1\QrFormat")
     */
    protected $qrFormat;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $paymentDescription;

    /**
     * @var \zaporylie\Vipps\Model\EPayment\v1\Receipt
     * @Serializer\Type("zaporylie\Vipps\Model\EPayment\v1\Receipt")
     */
    protected $receipt;

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
     * Gets customer value.
     *
     * @return \zaporylie\Vipps\Model\EPayment\v1\Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

  /**
   * Gets customerInteraction value.
   *
   * @return string
   */
    public function getCustomerInteraction(): string
    {
        return $this->customerInteraction;
    }

  /**
   * Gets industryData value.
   *
   * @return \zaporylie\Vipps\Model\EPayment\v1\IndustryData
   */
    public function getIndustryData(): IndustryData
    {
        return $this->industryData;
    }

  /**
   * Gets paymentMethod value.
   *
   * @return \zaporylie\Vipps\Model\EPayment\v1\PaymentMethod
   */
    public function getPaymentMethod(): PaymentMethod
    {
        return $this->paymentMethod;
    }

  /**
   * Gets profile value.
   *
   * @return \zaporylie\Vipps\Model\EPayment\v1\Profile
   */
    public function getProfile(): Profile
    {
        return $this->profile;
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
   * Gets returnUrl value.
   *
   * @return string
   */
    public function getReturnUrl(): string
    {
        return $this->returnUrl;
    }

  /**
   * Gets userFlow value.
   *
   * @return string
   */
    public function getUserFlow(): string
    {
        return $this->userFlow;
    }

  /**
   * Gets expiresAt value.
   *
   * @return \DateTimeInterface|null
   */
    public function getExpiresAt(): ?\DateTimeInterface
    {
        return $this->expiresAt;
    }

  /**
   * Gets qrFormat value.
   *
   * @return \zaporylie\Vipps\Model\EPayment\v1\QrFormat
   */
    public function getQrFormat(): QrFormat
    {
        return $this->qrFormat;
    }

  /**
   * Gets paymentDescription value.
   *
   * @return string
   */
    public function getPaymentDescription(): string
    {
        return $this->paymentDescription;
    }

  /**
   * Gets receipt value.
   *
   * @return \zaporylie\Vipps\Model\EPayment\v1\Receipt
   */
    public function getReceipt(): Receipt
    {
        return $this->receipt;
    }

  /**
   * Sets amount variable.
   *
   * @param \zaporylie\Vipps\Model\EPayment\v1\Amount $amount
   *
   * @return $this
   */
    public function setAmount(Amount $amount)
    {
        $this->amount = $amount;
        return $this;
    }

  /**
   * Sets customer variable.
   *
   * @param \zaporylie\Vipps\Model\EPayment\v1\Customer $customer
   *
   * @return $this
   */
    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;
        return $this;
    }

  /**
   * Sets customerInteraction variable.
   *
   * @param string $customerInteraction
   *
   * @return $this
   */
    public function setCustomerInteraction(string $customerInteraction)
    {
      // Allowed values are: CUSTOMER_PRESENT, CUSTOMER_NOT_PRESENT.
        if (!in_array($customerInteraction, ['CUSTOMER_PRESENT', 'CUSTOMER_NOT_PRESENT'])) {
            throw new \InvalidArgumentException('Invalid value for customerInteraction.');
        }
        $this->customerInteraction = $customerInteraction;
        return $this;
    }

  /**
   * Sets industryData variable.
   *
   * @param \zaporylie\Vipps\Model\EPayment\v1\IndustryData $industryData
   *
   * @return $this
   */
    public function setIndustryData(IndustryData $industryData)
    {
        $this->industryData = $industryData;
        return $this;
    }

  /**
   * Sets paymentMethod variable.
   *
   * @param \zaporylie\Vipps\Model\EPayment\v1\PaymentMethod $paymentMethod
   *
   * @return $this
   */
    public function setPaymentMethod(PaymentMethod $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

  /**
   * Sets profile variable.
   *
   * @param \zaporylie\Vipps\Model\EPayment\v1\Profile $profile
   *
   * @return $this
   */
    public function setProfile(Profile $profile)
    {
        $this->profile = $profile;
        return $this;
    }

  /**
   * Sets reference variable.
   *
   * @param string $reference
   *
   * @return $this
   */
    public function setReference(string $reference)
    {
      // Between 8 and 50 characters.
        assert(strlen($reference) >= 8 && strlen($reference) <= 50, 'Reference must be between 8 and 50 characters.');
        $this->reference = $reference;
        return $this;
    }

  /**
   * Sets returnUrl variable.
   *
   * @param string $returnUrl
   *
   * @return $this
   */
    public function setReturnUrl(string $returnUrl)
    {
        $this->returnUrl = $returnUrl;
        return $this;
    }

  /**
   * Sets userFlow variable.
   *
   * @param string $userFlow
   *
   * @return $this
   */
    public function setUserFlow(string $userFlow)
    {
        assert(in_array($userFlow, ['PUSH_MESSAGE', 'NATIVE_REDIRECT', 'WEB_REDIRECT', 'QR']), 'User flow must be one of PUSH_MESSAGE, NATIVE_REDIRECT, WEB_REDIRECT or QR.');
      // If user flow is PUSH_MESSAGE the value for customer.phoneNumber is
      // required.
        if ($userFlow === 'PUSH_MESSAGE' && (!$this->customer instanceof Customer || !$this->customer->getPhoneNumber())) {
            throw new \InvalidArgumentException('Customer phone number is required for PUSH_MESSAGE user flow.');
        }
        $this->userFlow = $userFlow;
        return $this;
    }

  /**
   * Sets expiresAt variable.
   *
   * @param \DateTimeInterface|null $expiresAt
   *
   * @return $this
   */
    public function setExpiresAt(?\DateTimeInterface $expiresAt)
    {
        // The value must be more than 10 minutes and less than 28 days in the
        // future.
        if ($expiresAt && $expiresAt->getTimestamp() < time() + 600) {
            throw new \InvalidArgumentException('Expiration date must be at least 10 minutes in the future.');
        }
        if ($expiresAt && $expiresAt->getTimestamp() > time() + 2419200) {
            throw new \InvalidArgumentException('Expiration date must be less than 28 days in the future.');
        }
        // User flow must be set to PUSH_MESSAGE or QR
        if ($expiresAt && $this->userFlow !== 'PUSH_MESSAGE' && $this->userFlow !== 'QR') {
            throw new \InvalidArgumentException('Expiration date can only be set when user flow is PUSH_MESSAGE or QR.');
        }
        $this->expiresAt = $expiresAt;
        return $this;
    }

  /**
   * Sets qrFormat variable.
   *
   * @param \zaporylie\Vipps\Model\EPayment\v1\QrFormat $qrFormat
   *
   * @return $this
   */
    public function setQrFormat(QrFormat $qrFormat)
    {
        $this->qrFormat = $qrFormat;
        return $this;
    }

    /**
     * Sets paymentDescription variable.
     *
     * @param string $paymentDescription
     *
     * @return $this
     */
    public function setPaymentDescription(string $paymentDescription)
    {
      // Between 3 and 100 characters.
        if (strlen($paymentDescription) < 3 || strlen($paymentDescription) > 100) {
            throw new \InvalidArgumentException('Payment description must be between 3 and 100 characters.');
        }
        $this->paymentDescription = $paymentDescription;
        return $this;
    }

    /**
     * Sets receipt variable.
     *
     * @param \zaporylie\Vipps\Model\EPayment\v1\Receipt $receipt
     *
     * @return $this
     */
    public function setReceipt(Receipt $receipt)
    {
        $this->receipt = $receipt;
        return $this;
    }
}
