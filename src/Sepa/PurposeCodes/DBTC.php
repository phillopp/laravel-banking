<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code DBTC
 *
 * Collection of funds initiated via a debit transfer.
 */
class DBTC extends PurposeCode
{
    private string $code = 'DBTC';
    private string $description = 'Collection of funds initiated via a debit transfer.';
}