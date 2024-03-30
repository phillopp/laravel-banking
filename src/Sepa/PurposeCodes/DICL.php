<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code DICL
 *
 * Card Settlement-Settlement of Diners transactions.
 */
class DICL extends PurposeCode
{
    private string $code = 'DICL';
    private string $description = 'Card Settlement-Settlement of Diners transactions.';
}