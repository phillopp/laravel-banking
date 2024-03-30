<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code VATX
 *
 * Transaction is the payment of value added tax.
 */
class VATX extends PurposeCode
{
    private string $code = 'VATX';
    private string $description = 'Transaction is the payment of value added tax.';
}