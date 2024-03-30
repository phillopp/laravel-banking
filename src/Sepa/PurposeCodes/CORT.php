<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CORT
 *
 * Transaction is related to settlement of a trade, e.g. a foreign exchange deal or a securities transaction.
 */
class CORT extends PurposeCode
{
    private string $code = 'CORT';
    private string $description = 'Transaction is related to settlement of a trade, e.g. a foreign exchange deal or a securities transaction.';
}