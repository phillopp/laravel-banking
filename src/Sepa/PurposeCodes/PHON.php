<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code PHON
 *
 * Transaction is related to a payment of telephone bill.
 */
class PHON extends PurposeCode
{
    private string $code = 'PHON';
    private string $description = 'Transaction is related to a payment of telephone bill.';
}