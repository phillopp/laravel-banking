<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code UNIT
 *
 * Transaction is purchase of Unit Trust
 */
class UNIT extends PurposeCode
{
    private string $code = 'UNIT';
    private string $description = 'Transaction is purchase of Unit Trust';
}