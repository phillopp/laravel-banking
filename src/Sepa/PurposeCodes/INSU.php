<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code INSU
 *
 * Transaction is payment of an insurance premium.
 */
class INSU extends PurposeCode
{
    private string $code = 'INSU';
    private string $description = 'Transaction is payment of an insurance premium.';
}