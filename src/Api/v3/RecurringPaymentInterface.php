<?php

namespace zaporylie\Vipps\Api\v3;

use zaporylie\Vipps\Model\RecurringPayment\v3\RequestCaptureCharge;
use zaporylie\Vipps\Model\RecurringPayment\v3\RequestCreateAgreement;
use zaporylie\Vipps\Model\RecurringPayment\v3\RequestCreateCharge;
use zaporylie\Vipps\Model\RecurringPayment\v3\RequestRefundCharge;
use zaporylie\Vipps\Model\RecurringPayment\v3\RequestUpdateAgreement;
use zaporylie\Vipps\Model\RecurringPayment\v3\ResponseCreateAgreement;
use zaporylie\Vipps\Model\RecurringPayment\v3\ResponseCreateCharge;
use zaporylie\Vipps\Model\RecurringPayment\v3\ResponseGetAgreement;
use zaporylie\Vipps\Model\RecurringPayment\v3\ResponseGetCharge;

/**
 * Interface PaymentInterface
 *
 * @package Vipps\Api
 */
interface RecurringPaymentInterface
{

    /**
     * @param \zaporylie\Vipps\Model\RecurringPayment\v3\RequestCreateAgreement
     * @param string|null $idempotency_key
     *
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\ResponseCreateAgreement
     */
    public function createAgreement(RequestCreateAgreement $requestCreateAgreement, ?string $idempotency_key): ResponseCreateAgreement;

    /**
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\ResponseGetAgreement[]
     */
    public function getAgreements(): array;

    /**
     * @param string $agreement_id
     *
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\ResponseGetAgreement
     */
    public function getAgreement(string $agreement_id): ResponseGetAgreement;

    /**
     * @param string $agreement_id
     * @param \zaporylie\Vipps\Model\RecurringPayment\v3\RequestUpdateAgreement $request
     * @param
     */
    public function updateAgreement(string $agreement_id, RequestUpdateAgreement $request, ?string $idempotency_key): void;

    /**
     * @param string $agreement_id
     *
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\ResponseGetCharge[]
     */
    public function getCharges(string $agreement_id): array;

    /**
     * @param string $agreement_id
     * @param string $charge_id
     *
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\ResponseGetCharge
     */
    public function getCharge(string $agreement_id, string $charge_id): ResponseGetCharge;

    /**
     * @param string $agreement_id
     * @param \zaporylie\Vipps\Model\RecurringPayment\v3\RequestCreateCharge $request
     * @param string|null $idempotency_key
     *
     * @return \zaporylie\Vipps\Model\RecurringPayment\v3\ResponseCreateCharge
     */
    public function createCharge(string $agreement_id, RequestCreateCharge $request, ?string $idempotency_key): ResponseCreateCharge;

    /**
     * @param string $agreement_id
     * @param string $charge_id
     * @param string|null $idempotency_key
     */
    public function cancelCharge(string $agreement_id, string $charge_id, ?string $idempotency_key): void;

    /**
     * @param string $agreement_id
     * @param string $charge_id
     * @param \zaporylie\Vipps\Model\RecurringPayment\v3\RequestCaptureCharge $request
     * @param string|null $idempotency_key
     */
    public function captureCharge(string $agreement_id, string $charge_id, RequestCaptureCharge $request, ?string $idempotency_key): void;

    /**
     * @param string $agreement_id
     * @param string $charge_id
     * @param \zaporylie\Vipps\Model\RecurringPayment\v3\RequestRefundCharge $requestObject
     * @param string|null $idempotency_key
     */
    public function refundCharge(string $agreement_id, string $charge_id, RequestRefundCharge $requestObject, ?string $idempotency_key): void;
}
