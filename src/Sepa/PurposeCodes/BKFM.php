<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code BKFM
 *
 * Bank loan funding memo. Net cash movement for the loan contract final notification when sent separately from theloan contract final notification instruction.
 */
class BKFM extends PurposeCode
{
    private string $code = 'BKFM';
    private string $description = 'Bank loan funding memo. Net cash movement for the loan contract final notification when sent separately from theloan contract final notification instruction.';
}