<?php

namespace zaporylie\Vipps\Model\EPayment\v1;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class QrFormat
 * @package Vipps\Model\EPayment
 */
class QrFormat
{
  /**
   * Can be one of TEXT/TARGETURL, IMAGE/SVG+XML, IMAGE/PNG.
   * Default IMAGE/SVG+XML
   *
   * @var string
   * @Serializer\Type("string")
   */
    protected $format;

  /**
   * @var int|null
   * @Serializer\Type("integer|null")
   */
    protected $size;

  /**
   * Gets format value.
   *
   * @return string
   */
    public function getFormat(): string
    {
        return $this->format;
    }

  /**
   * Gets size value.
   *
   * @return int|null
   */
    public function getSize(): ?int
    {
        return $this->size;
    }

  /**
   * Sets format variable.
   *
   * @param string $format
   *
   * @return $this
   */
    public function setFormat(string $format)
    {
        $this->format = $format;
        return $this;
    }

  /**
   * Sets size variable.
   *
   * @param int|null $size
   *
   * @return $this
   */
    public function setSize(?int $size)
    {
        $this->size = $size;
        return $this;
    }
}
