<?php

namespace zaporylie\Vipps\Model\EPayment\v1;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class PaymentSources
 * @package Vipps\Model\EPayment
 */
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
   * Gets giftCard value.
   *
   * @return int
   */
    public function getGiftCard(): int
    {
        return $this->giftCard;
    }

  /**
   * Gets card value.
   *
   * @return int
   */
    public function getCard(): int
    {
        return $this->card;
    }

  /**
   * Gets voucher value.
   *
   * @return int
   */
    public function getVoucher(): int
    {
        return $this->voucher;
    }

  /**
   * Gets cash value.
   *
   * @return int
   */
    public function getCash(): int
    {
        return $this->cash;
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
}
