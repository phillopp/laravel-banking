<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code AGRT
 *
 * Transaction is related to the agricultural domain.
 */
class AGRT extends PurposeCode
{
    private string $code = 'AGRT';
    private string $description = 'Transaction is related to the agricultural domain.';
}