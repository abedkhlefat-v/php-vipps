<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class PrefillCustomer
{

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    protected $firstName;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    protected $lastName;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    protected $email;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    protected $phoneNumber;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    protected $streetAddress;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    protected $city;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    protected $postalCode;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    protected $country;

    /**
     * Sets streetAddress variable.
     *
     * @param string|null $streetAddress
     *
     * @return $this
     */
    public function setStreetAddress(?string $streetAddress)
    {
        $this->streetAddress = $streetAddress;
        return $this;
    }

    /**
     * Sets postalCode variable.
     *
     * @param string|null $postalCode
     *
     * @return $this
     */
    public function setPostalCode(?string $postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Sets country variable.
     *
     * @param string|null $country
     *
     * @return $this
     */
    public function setCountry(?string $country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Sets city variable.
     *
     * @param string|null $city
     *
     * @return $this
     */
    public function setCity(?string $city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Sets email variable.
     *
     * @param string|null $email
     *
     * @return $this
     */
    public function setEmail(?string $email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Sets firstName variable.
     *
     * @param string|null $firstName
     *
     * @return $this
     */
    public function setFirstName(?string $firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Sets lastName variable.
     *
     * @param string|null $lastName
     *
     * @return $this
     */
    public function setLastName(?string $lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Sets phoneNumber variable.
     *
     * @param string|null $phoneNumber
     *
     * @return $this
     */
    public function setPhoneNumber(?string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
}
