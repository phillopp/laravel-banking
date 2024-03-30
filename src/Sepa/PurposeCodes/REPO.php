<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code REPO
 *
 * Cash collateral related to a repurchase agreement transaction.
 */
class REPO extends PurposeCode
{
    private string $code = 'REPO';
    private string $description = 'Cash collateral related to a repurchase agreement transaction.';
}