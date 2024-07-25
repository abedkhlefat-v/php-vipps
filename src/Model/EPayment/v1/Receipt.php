<?php

namespace zaporylie\Vipps\Model\EPayment\v1;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Receipt
 *
 * @package Vipps\Model\EPayment
 */
class Receipt
{

  /**
   * @var \zaporylie\Vipps\Model\EPayment\v1\OrderLine[]
   * @Serializer\Type("array<zaporylie\Vipps\Model\EPayment\v1\OrderLine>")
   */
    protected $orderLines;

  /**
   * @var \zaporylie\Vipps\Model\EPayment\v1\BottomLine
   * @Serializer\Type("zaporylie\Vipps\Model\EPayment\v1\BottomLine")
   */
    protected $bottomLine;
}
