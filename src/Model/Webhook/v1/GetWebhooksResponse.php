<?php

namespace zaporylie\Vipps\Model\Webhook\v1;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class RegisterWebhookResponse
 *
 * @package Vipps\Model\Webhook
 */
class GetWebhooksResponse
{

    /**
     * @var \zaporylie\Vipps\Model\Webhook\v1\Webhook[]
     * @Serializer\Type("array<zaporylie\Vipps\Model\Webhook\v1\Webhook>")
     */
    protected $webhooks;

    /**
     * Gets webhooks value.
     *
     * @return \zaporylie\Vipps\Model\Webhook\v1\Webhook[]
     */
    public function getWebhooks(): array {
        return $this->webhooks;
    }
}
