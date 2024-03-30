<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code WEBI
 *
 * Transaction is related to a payment initiated via internet.
 */
class WEBI extends PurposeCode
{
    private string $code = 'WEBI';
    private string $description = 'Transaction is related to a payment initiated via internet.';
}