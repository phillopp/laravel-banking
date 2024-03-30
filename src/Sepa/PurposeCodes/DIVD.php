<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code DIVD
 *
 * Transaction is payment of dividends.
 */
class DIVD extends PurposeCode
{
    private string $code = 'DIVD';
    private string $description = 'Transaction is payment of dividends.';
}