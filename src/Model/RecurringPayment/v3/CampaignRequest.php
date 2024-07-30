<?php

namespace zaporylie\Vipps\Model\RecurringPayment\v3;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class InitialCharge.
 *
 * @package Vipps\Model\RecurringPayment
 */
class CampaignRequest
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $type;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $price;

    /**
     * @var \DateTimeInterface
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:s\Z'>")
     */
    protected $end;

    /**
     * Get the value of end
     *
     * @return  \DateTimeInterface
     */
    public function getEnd(): \DateTimeInterface
    {
        return $this->end;
    }

    /**
     * Set the value of end
     *
     * @param  \DateTimeInterface  $end
     *
     * @return  self
     */
    public function setEnd(\DateTimeInterface $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Gets price value.
     *
     * @return int
     */
    public function getPrice(): int {
        return $this->price;
    }

    /**
     * Sets price variable.
     *
     * @param int $price
     *
     * @return $this
     */
    public function setPrice(int $price) {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets type value.
     *
     * @return string
     */
    public function getType(): string {
        return $this->type;
    }

    /**
     * Sets type variable.
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType(string $type) {
        $this->type = $type;
        return $this;
    }
}
