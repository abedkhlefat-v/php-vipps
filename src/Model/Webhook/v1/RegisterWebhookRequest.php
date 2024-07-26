<?php

namespace zaporylie\Vipps\Model\Webhook\v1;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class RegisterWebhookRequest
 *
 * @package Vipps\Model\Webhook
 */
class RegisterWebhookRequest
{

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
     * Sets url variable.
     *
     * @param string $url
     *
     * @return $this
     */
    public function setUrl(string $url) {
        $this->url = $url;
        return $this;
    }

    /**
     * Sets events variable.
     *
     * @param array $events
     *
     * @return $this
     */
    public function setEvents(array $events) {
        $this->events = $events;
        return $this;
    }
}
