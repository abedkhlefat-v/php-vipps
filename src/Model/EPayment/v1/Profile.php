<?php

namespace zaporylie\Vipps\Model\EPayment\v1;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Profile
 *
 * @package Vipps\Model\EPayment
 */
class Profile
{
  /**
   * @var string
   * @Serializer\Type("string")
   */
    protected $scope;

  /**
   * Gets scope value.
   *
   * @return string
   */
    public function getScope(): string
    {
        return $this->scope;
    }

  /**
   * Sets scope variable.
   *
   * @param string $scope
   *
   * @return $this
   */
    public function setScope(string $scope)
    {
        $this->scope = $scope;
        return $this;
    }
}
