<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code OPCC
 *
 * Cash collateral payment for OTC options associated with an FCM agreement. Where such payment is not segregated and is available for use by the client upon return
 */
class OPCC extends PurposeCode
{
    private string $code = 'OPCC';
    private string $description = 'Cash collateral payment for OTC options associated with an FCM agreement. Where such payment is not segregated and is available for use by the client upon return';
}