<?php

namespace zaporylie\Vipps\Model\RecurringPayment;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class RequestUpdateAgreement
 *
 * @package Vipps\Model\RecurringPayment
 */
class RequestUpdateAgreement
{

    /**
     * @var \zaporylie\Vipps\Model\RecurringPayment\Pricing
     * @Serializer\Type("zaporylie\Vipps\Model\RecurringPayment\Pricing")
     */
    protected $pricing;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $productName;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $productDescription;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $status;

    /**
     * Sets price variable.
     *
     * @param \zaporylie\Vipps\Model\RecurringPayment\Pricing $price
     *
     * @return $this
     */
    public function setPricing(Pricing $price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Sets productDescription variable.
     *
     * @param string $productDescription
     *
     * @return $this
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;
        return $this;
    }

    /**
     * Sets productName variable.
     *
     * @param string $productName
     *
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * Sets status variable.
     *
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
}
