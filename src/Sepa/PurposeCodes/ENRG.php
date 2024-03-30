<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code ENRG
 *
 * Transaction is related to a utility operation.
 */
class ENRG extends PurposeCode
{
    private string $code = 'ENRG';
    private string $description = 'Transaction is related to a utility operation.';
}