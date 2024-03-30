<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code RVPO
 *
 * Cash collateral related to a reverse repurchase agreement transaction.
 */
class RVPO extends PurposeCode
{
    private string $code = 'RVPO';
    private string $description = 'Cash collateral related to a reverse repurchase agreement transaction.';
}