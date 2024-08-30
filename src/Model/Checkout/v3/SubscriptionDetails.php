<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class SubscriptionDetails
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $state;

    /**
     * @var string
     * @Serializer\Type("string")
    */
    protected $agreementId;

    /**
     * Sets agreementId variable.
     *
     * @param string $agreementId
     *
     * @return $this
     */
    public function setAgreementId(string $agreementId)
    {
        $this->agreementId = $agreementId;
        return $this;
    }

    /**
     * Sets state variable.
     *
     * @param string $state
     *
     * @return $this
     */
    public function setState(string $state)
    {
        $this->state = $state;
        return $this;
    }
}
