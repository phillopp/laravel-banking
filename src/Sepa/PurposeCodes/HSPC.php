<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code HSPC
 *
 * Transaction is a payment for hospital care services.
 */
class HSPC extends PurposeCode
{
    private string $code = 'HSPC';
    private string $description = 'Transaction is a payment for hospital care services.';
}