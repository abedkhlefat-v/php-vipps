<?php

namespace zaporylie\Vipps\Model\Webhook\v1;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class RegisterWebhookResponse
 *
 * @package Vipps\Model\Webhook
 */
class RegisterWebhookResponse
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
    protected $secret;

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
     * Gets secret value.
     *
     * @return string
     */
    public function getSecret(): string
    {
        return $this->secret;
    }
}
