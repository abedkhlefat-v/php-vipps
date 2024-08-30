<?php

namespace zaporylie\Vipps\Model\Webhook\v1;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Webhook
 *
 * @package Vipps\Model\Webhook
 */
class Webhook
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $id;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $url;

    /**
     * @var array
     * @Serializer\Type("array<string>")
     */
    protected $events;

    /**
     * Gets id value.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Gets url value.
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Gets events value.
     *
     * @return array
     */
    public function getEvents(): array
    {
        return $this->events;
    }
}
