<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code OPBC
 *
 * Cash collateral payment for OTC options associated with an FCM agreement. Where such payment is segregated and not available for use by the client
 */
class OPBC extends PurposeCode
{
    private string $code = 'OPBC';
    private string $description = 'Cash collateral payment for OTC options associated with an FCM agreement. Where such payment is segregated and not available for use by the client';
}