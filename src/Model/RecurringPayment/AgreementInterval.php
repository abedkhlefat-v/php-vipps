<?php

namespace zaporylie\Vipps\Model\RecurringPayment;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Interval
 *
 * @todo: Currently this package is not used anywhere in the project. Use it for
 * reference and comparison only.
 *
 * @package Vipps\Model\RecurringPayment
 */
class AgreementInterval
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $unit;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $count;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $text;

    /**
     * Gets unit value.
     *
     * @return string
     */
    public function getUnit(): string {
      return $this->unit;
    }

    /**
     * Gets count value.
     *
     * @return int
     */
    public function getCount(): int {
      return $this->count;
    }

    /**
     * Gets text value.
     *
     * @return string
     */
    public function getText(): string {
      return $this->text;
    }

    /**
     * Sets unit variable.
     *
     * @param string $unit
     *
     * @return $this
     */
    public function setUnit(string $unit) {
      $this->unit = $unit;
      return $this;
    }

    /**
     * Sets count variable.
     *
     * @param int $count
     *
     * @return $this
     */
    public function setCount(int $count) {
      $this->count = $count;
      return $this;
    }

    /**
     * Sets text variable.
     *
     * @param string $text
     *
     * @return $this
     */
    public function setText(string $text) {
      $this->text = $text;
      return $this;
    }
}
