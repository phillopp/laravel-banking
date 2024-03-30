<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SLPI
 *
 * Transaction is payment of a well formatted payment slip.
 */
class SLPI extends PurposeCode
{
    private string $code = 'SLPI';
    private string $description = 'Transaction is payment of a well formatted payment slip.';
}