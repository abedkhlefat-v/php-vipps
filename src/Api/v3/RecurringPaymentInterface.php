<?php

namespace zaporylie\Vipps\Api\v3;

use zaporylie\Vipps\Model\RecurringPayment\v3\RequestCreateAgreement;
use zaporylie\Vipps\Model\RecurringPayment\v3\RequestCreateCharge;
use zaporylie\Vipps\Model\RecurringPayment\v3\RequestRefundCharge;
use zaporylie\Vipps\Model\RecurringPayment\v3\RequestUpdateAgreement;

/**
 * Interface PaymentInterface
 *
 * @package Vipps\Api
 */
interface RecurringPaymentInterface
{

    /**
     * @param \zaporylie\Vipps\Model\RecurringPayment\v3\RequestCreateAgreement
     *
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\ResponseCreateAgreement
     */
    public function createAgreement(RequestCreateAgreement $requestCreateAgreement);

    /**
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\ResponseGetAgreement[]
     */
    public function getAgreements();

    /**
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\ResponseGetAgreement
     */
    public function getAgreement($agreement_id);

    /**
     * @param $agreement_id
     * @param \zaporylie\Vipps\Model\RecurringPayment\v3\RequestUpdateAgreement $request
     *
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\ResponseUpdateAgreement
     */
    public function updateAgreement($agreement_id, RequestUpdateAgreement $request);

    /**
     * @param $agreement_id
     *
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\Charge[]
     */
    public function getCharges($agreement_id);

    /**
     * @param $agreement_id
     * @param $charge_id
     *
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\Charge
     */
    public function getCharge($agreement_id, $charge_id);

    /**
     * @param $agreement_id
     * @param \zaporylie\Vipps\Model\RecurringPayment\v3\RequestCreateCharge $request
     *
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\ResponseCreateCharge
     */
    public function createCharge($agreement_id, RequestCreateCharge $request);

    /**
     * @param string $agreement_id
     * @param string $charge_id
     *
     * @return string
     */
    public function cancelCharge($agreement_id, $charge_id);

    /**
     * @param string $agreement_id
     * @param string $charge_id
     *
     * @return string
     */
    public function captureCharge($agreement_id, $charge_id);

    /**
     * @param string $agreement_id
     * @param string $charge_id
     * @param \zaporylie\Vipps\Model\RecurringPayment\v3\RequestRefundCharge $requestObject
     *
     * @return string
     */
    public function refundCharge($agreement_id, $charge_id, RequestRefundCharge $requestObject);
}
