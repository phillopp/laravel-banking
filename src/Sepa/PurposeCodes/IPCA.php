<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code IPCA
 *
 * Transaction in which the Return of the amount is fully returned.
 */
class IPCA extends PurposeCode
{
    private string $code = 'IPCA';
    private string $description = 'Transaction in which the Return of the amount is fully returned.';
}