<?php

namespace zaporylie\Vipps\Model\EPayment\v1;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Barcode
 * @package Vipps\Model\EPayment
 */
class Barcode
{
  /**
   * @var string|null
   * @Serializer\Type("string|null")
   */
    protected $format;

  /**
   * @var string|null
   * @Serializer\Type("string|null")
   */
    protected $data;

  /**
   * Sets format variable.
   *
   * @param string|null $format
   *
   * @return $this
   */
    public function setFormat(?string $format)
    {
        $this->format = $format;
        return $this;
    }

  /**
   * Sets data variable.
   *
   * @param string|null $data
   *
   * @return $this
   */
    public function setData(?string $data)
    {
        $this->data = $data;
        return $this;
    }
}
