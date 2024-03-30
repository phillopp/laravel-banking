<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CBFF
 *
 * Transaction is related to capital building fringe fortune, ie capital building in general
 */
class CBFF extends PurposeCode
{
    private string $code = 'CBFF';
    private string $description = 'Transaction is related to capital building fringe fortune, ie capital building in general';
}