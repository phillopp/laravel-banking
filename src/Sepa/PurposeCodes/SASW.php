<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SASW
 *
 * Card Settlement-Settlement of ATM transactions.
 */
class SASW extends PurposeCode
{
    private string $code = 'SASW';
    private string $description = 'Card Settlement-Settlement of ATM transactions.';
}