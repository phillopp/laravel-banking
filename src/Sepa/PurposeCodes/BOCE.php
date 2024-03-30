<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code BOCE
 *
 * Transaction is related to a payment associated with a Back Office Conversion Entry
 */
class BOCE extends PurposeCode
{
    private string $code = 'BOCE';
    private string $description = 'Transaction is related to a payment associated with a Back Office Conversion Entry';
}