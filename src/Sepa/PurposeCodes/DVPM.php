<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code DVPM
 *
 * Code used to pre-advise the account servicer of a forthcoming deliver against payment instruction.
 */
class DVPM extends PurposeCode
{
    private string $code = 'DVPM';
    private string $description = 'Code used to pre-advise the account servicer of a forthcoming deliver against payment instruction.';
}