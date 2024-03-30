<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code BKPP
 *
 * Principal paydowns. Specific to bank loans
 */
class BKPP extends PurposeCode
{
    private string $code = 'BKPP';
    private string $description = 'Principal paydowns. Specific to bank loans';
}