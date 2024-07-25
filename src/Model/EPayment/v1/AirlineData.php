<?php

namespace zaporylie\Vipps\Model\EPayment\v1;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class AirlineData
 *
 * @package Vipps\Model\EPayment
 */
class AirlineData
{
  /**
   * @var string
   * @Serializer\Type("string")
   */
    protected $agencyInvoiceNumber;

  /**
   * @var string
   * @Serializer\Type("string")
   */
    protected $airlineCode;

  /**
   * @var string
   * @Serializer\Type("string")
   */
    protected $airlineDesignatorCode;

  /**
   * @var string
   * @Serializer\Type("string")
   */
    protected $passengerName;

  /**
   * @var string
   * @Serializer\Type("string")
   */
    protected $ticketNumber;
}
