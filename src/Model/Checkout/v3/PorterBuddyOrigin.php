<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class PorterBuddyOrigin
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $name;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $email;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $phoneNumber;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\PorterBuddyOriginAddress
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\PorterBuddyOriginAddress")
     */
    protected $address;

    /**
     * Sets name variable.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName(string $name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Sets email variable.
     *
     * @param string $email
     *
     * @return $this
     */
    public function setEmail(string $email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Sets phoneNumber variable.
     *
     * @param string $phoneNumber
     *
     * @return $this
     */
    public function setPhoneNumber(string $phoneNumber) {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Sets address variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\PorterBuddyOriginAddress $address
     *
     * @return $this
     */
    public function setAddress(PorterBuddyOriginAddress $address) {
        $this->address = $address;
        return $this;
    }
}
