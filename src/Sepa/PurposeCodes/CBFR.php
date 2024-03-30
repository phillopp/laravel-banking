<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CBFR
 *
 * Transaction is related to capital building fringe fortune for retirement
 */
class CBFR extends PurposeCode
{
    private string $code = 'CBFR';
    private string $description = 'Transaction is related to capital building fringe fortune for retirement';
}