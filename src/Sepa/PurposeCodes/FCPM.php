<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code FCPM
 *
 * Transaction is the payment for late fees & charges. E.g Credit card charges
 */
class FCPM extends PurposeCode
{
    private string $code = 'FCPM';
    private string $description = 'Transaction is the payment for late fees & charges. E.g Credit card charges';
}