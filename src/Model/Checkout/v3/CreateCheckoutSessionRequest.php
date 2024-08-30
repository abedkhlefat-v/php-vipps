<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class CreateCheckoutSessionRequest
{

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\Transaction
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\Transaction")
     */
    protected $transaction;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $logistics;

    /**
     * Default: PAYMENT.
     *
     * @var string
     * @Serializer\Type("string")
     */
    protected $type;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\PrefillCustomer
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\PrefillCustomer")
     */
    protected $prefillCustomer;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\MerchantInfo
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\MerchantInfo")
     */
    protected $merchantInfo;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\Configuration
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\Configuration")
     */
    protected $configuration;

    /**
     * Sets configuration variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\Configuration $configuration
     *
     * @return $this
     */
    public function setConfiguration(Configuration $configuration)
    {
        $this->configuration = $configuration;
        return $this;
    }

    /**
     * Sets logistics variable.
     *
     * @param int $logistics
     *
     * @return $this
     */
    public function setLogistics(int $logistics)
    {
        $this->logistics = $logistics;
        return $this;
    }

    /**
     * Sets merchantInfo variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\MerchantInfo $merchantInfo
     *
     * @return $this
     */
    public function setMerchantInfo(MerchantInfo $merchantInfo)
    {
        $this->merchantInfo = $merchantInfo;
        return $this;
    }

    /**
     * Sets prefillCustomer variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\PrefillCustomer $prefillCustomer
     *
     * @return $this
     */
    public function setPrefillCustomer(PrefillCustomer $prefillCustomer)
    {
        $this->prefillCustomer = $prefillCustomer;
        return $this;
    }

    /**
     * Sets transaction variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\Transaction $transaction
     *
     * @return $this
     */
    public function setTransaction(Transaction $transaction)
    {
        $this->transaction = $transaction;
        return $this;
    }

    /**
     * Sets type variable.
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType(string $type)
    {
        $this->type = $type;
        return $this;
    }
}
