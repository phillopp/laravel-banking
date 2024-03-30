<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SALA
 *
 * Transaction is the payment of salaries.
 */
class SALA extends PurposeCode
{
    private string $code = 'SALA';
    private string $description = 'Transaction is the payment of salaries.';
}