<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code UBIL
 *
 * Transaction is for the payment to common utility provider that provide gas, water and/or electricity.
 */
class UBIL extends PurposeCode
{
    private string $code = 'UBIL';
    private string $description = 'Transaction is for the payment to common utility provider that provide gas, water and/or electricity.';
}