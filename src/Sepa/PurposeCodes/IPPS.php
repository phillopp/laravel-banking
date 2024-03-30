<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code IPPS
 *
 * Transaction in which the amount is available to the payee immediately, done at POS.
 */
class IPPS extends PurposeCode
{
    private string $code = 'IPPS';
    private string $description = 'Transaction in which the amount is available to the payee immediately, done at POS.';
}