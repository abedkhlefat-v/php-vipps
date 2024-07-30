<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class PickupPoint
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $id;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $name;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $address;

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
     * @var array
     * @Serializer\Type("array")
     */
    protected $openingHours;

    /**
     * Gets postalCode value.
     *
     * @return string
     */
    public function getPostalCode(): string {
        return $this->postalCode;
    }

    /**
     * Gets country value.
     *
     * @return string
     */
    public function getCountry(): string {
        return $this->country;
    }

    /**
     * Gets city value.
     *
     * @return string
     */
    public function getCity(): string {
        return $this->city;
    }

    /**
     * Gets id value.
     *
     * @return string
     */
    public function getId(): string {
        return $this->id;
    }

    /**
     * Gets name value.
     *
     * @return int
     */
    public function getName(): int {
        return $this->name;
    }

    /**
     * Gets address value.
     *
     * @return string
     */
    public function getAddress(): string {
        return $this->address;
    }

    /**
     * Gets openingHours value.
     *
     * @return array
     */
    public function getOpeningHours(): array {
        return $this->openingHours;
    }
}
