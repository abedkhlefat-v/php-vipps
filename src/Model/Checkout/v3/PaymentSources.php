<?php

namespace zaporylie\Vipps\Model\Checkout\v3;

use JMS\Serializer\Annotation as Serializer;

class PaymentSources
{


    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $giftCard;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $card;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $voucher;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    protected $cash;

    /**
     * Sets card variable.
     *
     * @param int $card
     *
     * @return $this
     */
    public function setCard(int $card)
    {
        $this->card = $card;
        return $this;
    }

    /**
     * Sets cash variable.
     *
     * @param int $cash
     *
     * @return $this
     */
    public function setCash(int $cash)
    {
        $this->cash = $cash;
        return $this;
    }

    /**
     * Sets giftCard variable.
     *
     * @param int $giftCard
     *
     * @return $this
     */
    public function setGiftCard(int $giftCard)
    {
        $this->giftCard = $giftCard;
        return $this;
    }

    /**
     * Sets voucher variable.
     *
     * @param int $voucher
     *
     * @return $this
     */
    public function setVoucher(int $voucher)
    {
        $this->voucher = $voucher;
        return $this;
    }
}
