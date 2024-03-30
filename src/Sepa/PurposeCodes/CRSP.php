<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CRSP
 *
 * Cash collateral related to cash lending/borrowing; letter of Credit; signing of master agreement.
 */
class CRSP extends PurposeCode
{
    private string $code = 'CRSP';
    private string $description = 'Cash collateral related to cash lending/borrowing; letter of Credit; signing of master agreement.';
}