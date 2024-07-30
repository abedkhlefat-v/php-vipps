<?php

namespace zaporylie\Vipps\Api\v3;

use zaporylie\Vipps\Api\ApiBase;
use zaporylie\Vipps\Exceptions\Api\InvalidArgumentException;
use zaporylie\Vipps\Model\RecurringPayment\v3\RequestCreateAgreement;
use zaporylie\Vipps\Model\RecurringPayment\v3\RequestCreateCharge;
use zaporylie\Vipps\Model\RecurringPayment\v3\RequestRefundCharge;
use zaporylie\Vipps\Model\RecurringPayment\v3\RequestUpdateAgreement;
use zaporylie\Vipps\Resource\RecurringPayment\v3\CancelCharge;
use zaporylie\Vipps\Resource\RecurringPayment\v3\CaptureCharge;
use zaporylie\Vipps\Resource\RecurringPayment\v3\CreateAgreement;
use zaporylie\Vipps\Resource\RecurringPayment\v3\CreateCharge;
use zaporylie\Vipps\Resource\RecurringPayment\v3\GetAgreement;
use zaporylie\Vipps\Resource\RecurringPayment\v3\GetAgreements;
use zaporylie\Vipps\Resource\RecurringPayment\v3\GetCharge;
use zaporylie\Vipps\Resource\RecurringPayment\v3\GetCharges;
use zaporylie\Vipps\Resource\RecurringPayment\v3\RefundCharge;
use zaporylie\Vipps\Resource\RecurringPayment\v3\UpdateAgreement;
use zaporylie\Vipps\VippsInterface;

/**
 * Class RecurringPayment
 *
 * @package Vipps\Api
 */
class RecurringPayment extends ApiBase implements RecurringPaymentInterface
{

    /**
     * @var string
     */
    protected $merchantSerialNumber;

    /**
     * Gets merchantSerialNumber value.
     *
     * @return string
     */
    public function getMerchantSerialNumber()
    {
        if (empty($this->merchantSerialNumber)) {
            throw new InvalidArgumentException('Missing merchant serial number');
        }
        return $this->merchantSerialNumber;
    }

    /**
     * Payment constructor.
     *
     * Payments API needs one extra param - merchant serial number.
     *
     * @param \zaporylie\Vipps\VippsInterface $app
     * @param string $subscription_key
     * @param $merchant_serial_number
     * @param $custom_path
     */
    public function __construct(
        VippsInterface $app,
        $subscription_key,
        $merchant_serial_number
    ) {
        parent::__construct($app, $subscription_key);
        $this->merchantSerialNumber = $merchant_serial_number;
    }

    /**
     * {@inheritdoc}
     */
    public function createAgreement(RequestCreateAgreement $request)
    {
        $resource = new CreateAgreement($this->app, $this->getSubscriptionKey(), $request);
        $response = $resource->call();
        return $response;
    }

    /**
     * {@inheritdoc}
     */
    public function getAgreements()
    {
        $resource = new GetAgreements($this->app, $this->getSubscriptionKey());
        $response = $resource->call();
        return $response;
    }

    /**
     * {@inheritdoc}
     */
    public function getAgreement($agreement_id)
    {
        $resource = new GetAgreement($this->app, $this->getSubscriptionKey(), $agreement_id);
        $response = $resource->call();
        return $response;
    }

    /**
     * {@inheritdoc}
     */
    public function updateAgreement($agreement_id, RequestUpdateAgreement $request)
    {
        $resource = new UpdateAgreement($this->app, $this->getSubscriptionKey(), $agreement_id, $request);
        $response = $resource->call();
        return $response;
    }

    /**
     * {@inheritDoc}
     */
    public function getCharges($agreement_id)
    {
        $resource = new GetCharges($this->app, $this->getSubscriptionKey(), $agreement_id);
        $response = $resource->call();
        return $response;
    }

    /**
     * {@inheritDoc}
     */
    public function getCharge($agreement_id, $charge_id)
    {
        $resource = new GetCharge($this->app, $this->getSubscriptionKey(), $agreement_id, $charge_id);
        $response = $resource->call();
        return $response;
    }

    /**
     * {@inheritDoc}
     */
    public function createCharge($agreement_id, RequestCreateCharge $request)
    {
        $resource = new CreateCharge($this->app, $this->getSubscriptionKey(), $agreement_id, $request);
        $response = $resource->call();
        return $response;
    }

    /**
     * {@inheritDoc}
     */
    public function cancelCharge($agreement_id, $charge_id)
    {
        $resource = new CancelCharge($this->app, $this->getSubscriptionKey(), $agreement_id, $charge_id);
        $response = $resource->call();
        return $response;
    }

    /**
     * {@inheritDoc}
     */
    public function captureCharge($agreement_id, $charge_id)
    {
        $resource = new CaptureCharge($this->app, $this->getSubscriptionKey(), $agreement_id, $charge_id);
        $response = $resource->call();
        return $response;
    }

    /**
     * {@inheritDoc}
     */
    public function refundCharge($agreement_id, $charge_id, RequestRefundCharge $requestObject)
    {
        $resource = new RefundCharge(
            $this->app,
            $this->getSubscriptionKey(),
            $agreement_id,
            $charge_id,
            $requestObject
        );
        $response = $resource->call();
        return $response;
    }
}
