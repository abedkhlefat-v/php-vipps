<?php

namespace zaporylie\Vipps\Model\EPayment\v1;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class PaymentMethod
 *
 * @package Vipps\Model\EPayment
 */
class PaymentMethod
{
  /**
   * Allowed values are WALLET or CARD.
   *
   * @var string
   * @Serializer\Type("string")
   */
    protected $type;

  /**
   * Gets type value.
   *
   * @return string
   */
    public function getType(): string
    {
        return $this->type;
    }

  /**
   * Sets type variable.
   *
   * @param string $type
   *
   * @return $this
   */
    public function setType(string $type): self
    {
        assert(in_array($type, ['WALLET', 'CARD']));
        $this->type = $type;
        return $this;
    }
}
