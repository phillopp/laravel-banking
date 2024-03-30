<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code RVPM
 *
 * Code used to pre-advise the account servicer of a forthcoming receive against payment instruction.
 */
class RVPM extends PurposeCode
{
    private string $code = 'RVPM';
    private string $description = 'Code used to pre-advise the account servicer of a forthcoming receive against payment instruction.';
}