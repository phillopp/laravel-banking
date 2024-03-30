<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code MAFC
 *
 * Transaction is contribution to medical aid fund.
 */
class MAFC extends PurposeCode
{
    private string $code = 'MAFC';
    private string $description = 'Transaction is contribution to medical aid fund.';
}