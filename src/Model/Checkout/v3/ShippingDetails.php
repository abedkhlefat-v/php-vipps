<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class ShippingDetails
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
     * @var string|null
     * @Serializer\Type("string")
     */
    protected $shippingMethodId;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\Amount
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\Amount")
     */
    protected $amount;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\PickupPoint
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\PickupPoint")
     */
    protected $pickupPoint;

    /**
     * Gets email value.
     *
     * @return string|null
     */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * Gets city value.
     *
     * @return string|null
     */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets country value.
     *
     * @return string|null
     */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * Gets firstName value.
     *
     * @return string|null
     */
    public function getFirstName(): ?string {
        return $this->firstName;
    }

    /**
     * Gets lastName value.
     *
     * @return string|null
     */
    public function getLastName(): ?string {
        return $this->lastName;
    }

    /**
     * Gets phoneNumber value.
     *
     * @return string|null
     */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * Gets postalCode value.
     *
     * @return string|null
     */
    public function getPostalCode(): ?string {
        return $this->postalCode;
    }

    /**
     * Gets streetAddress value.
     *
     * @return string|null
     */
    public function getStreetAddress(): ?string {
        return $this->streetAddress;
    }

    /**
     * Gets amount value.
     *
     * @return \zaporylie\Vipps\Model\Checkout\v3\Amount
     */
    public function getAmount(): Amount {
        return $this->amount;
    }

    /**
     * Gets pickupPoint value.
     *
     * @return \zaporylie\Vipps\Model\Checkout\v3\PickupPoint
     */
    public function getPickupPoint(): PickupPoint {
        return $this->pickupPoint;
    }

    /**
     * Gets shippingMethodId value.
     *
     * @return string|null
     */
    public function getShippingMethodId(): ?string {
        return $this->shippingMethodId;
    }
}
