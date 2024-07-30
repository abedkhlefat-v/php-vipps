<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class OrderSummary
{

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\OrderLine[]
     * @Serializer\Type("array<zaporylie\Vipps\Model\Checkout\v3\OrderLine>")
     */
    protected $orderLines;

    /**
     * @var \zaporylie\Vipps\Model\Checkout\v3\OrderBottomLine
     * @Serializer\Type("zaporylie\Vipps\Model\Checkout\v3\OrderBottomLine")
     */
    protected $orderBottomLine;

    /**
     * Sets orderBottomLine variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\OrderBottomLine $orderBottomLine
     *
     * @return $this
     */
    public function setOrderBottomLine(OrderBottomLine $orderBottomLine) {
        $this->orderBottomLine = $orderBottomLine;
        return $this;
    }

    /**
     * Sets orderLines variable.
     *
     * @param \zaporylie\Vipps\Model\Checkout\v3\OrderLine[] $orderLines
     *
     * @return $this
     */
    public function setOrderLines(array $orderLines) {
        $this->orderLines = $orderLines;
        return $this;
    }

}
