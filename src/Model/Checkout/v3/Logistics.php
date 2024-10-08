<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class Logistics
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $dynamicOptionsCallback;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\OtherLogisticsOption[]
     * @Serializer\Type("array<zaporylie\Vipps\Model\Checkout\v3\OtherLogisticsOption>")
     */
    protected $fixedOptions;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\Integrations
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\Integrations")
     */
    protected $integrations;

    /**
     * Sets dynamicOptionsCallback variable.
     *
     * @param string $dynamicOptionsCallback
     *
     * @return $this
     */
    public function setDynamicOptionsCallback(string $dynamicOptionsCallback) {
        $this->dynamicOptionsCallback = $dynamicOptionsCallback;
        return $this;
    }

    /**
     * Sets fixedOptions variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\OtherLogisticsOption[] $fixedOptions
     *
     * @return $this
     */
    public function setFixedOptions(array $fixedOptions) {
        $this->fixedOptions = $fixedOptions;
        return $this;
    }

    /**
     * Sets integrations variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\Integrations $integrations
     *
     * @return $this
     */
    public function setIntegrations(Integrations $integrations) {
        $this->integrations = $integrations;
        return $this;
    }
}
