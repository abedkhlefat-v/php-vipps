<?php

namespace zaporylie\Vipps\Resource\RecurringPayment\v3;

use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializerBuilder;
use zaporylie\Vipps\ClientInterface;
use zaporylie\Vipps\Resource\AuthorizedResourceBase;

/**
 * Class PaymentResourceBase
 *
 * @package Vipps\Resource\Payment
 */
abstract class RecurringPaymentResourceBase extends AuthorizedResourceBase
{

    /**
     * @var string
     */
    protected $charge_id;

    /**
     * {@inheritdoc}
     */
    public function __construct(ClientInterface $client)
    {
        parent::__construct($client);

        // Adjust serializer.
        $this->serializer = SerializerBuilder::create()
            ->setPropertyNamingStrategy(new SerializedNameAnnotationStrategy(new IdenticalPropertyNamingStrategy()))
            ->build();

        // Content type for all requests must be set.
        $this->headers['Content-Type'] = 'application/json';
    }


    /**
     * {@inheritdoc}
     *
     * All occurrences of {id} pattern will be replaced with $this->id
     */
    public function getPath()
    {
        $path = parent::getPath();
        // If ID is set replace {id} pattern with model's ID.
        if (isset($this->charge_id)) {
            $path = str_replace('{charge_id}', $this->charge_id, $path);
        }
        return $path;
    }
}
