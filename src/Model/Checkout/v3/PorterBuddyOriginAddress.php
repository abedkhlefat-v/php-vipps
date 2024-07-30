<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class PorterBuddyOriginAddress
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $streetAddress;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $postalCode;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $city;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $country;

    /**
     * Sets city variable.
     *
     * @param string $city
     *
     * @return $this
     */
    public function setCity(string $city) {
        $this->city = $city;
        return $this;
    }

    /**
     * Sets country variable.
     *
     * @param string $country
     *
     * @return $this
     */
    public function setCountry(string $country) {
        $this->country = $country;
        return $this;
    }

    /**
     * Sets postalCode variable.
     *
     * @param string $postalCode
     *
     * @return $this
     */
    public function setPostalCode(string $postalCode) {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Sets streetAddress variable.
     *
     * @param string $streetAddress
     *
     * @return $this
     */
    public function setStreetAddress(string $streetAddress) {
        $this->streetAddress = $streetAddress;
        return $this;
    }

}
