<?php

/**
 * Vipps interface.
 *
 * Provide Vipps client interface.
 */

namespace zaporylie\Vipps;

/**
 * Interface VippsInterface
 * @package Vipps
 */
interface VippsInterface
{

    /**
     * @return \zaporylie\Vipps\ClientInterface
     */
    public function getClient();
}
