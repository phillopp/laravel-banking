<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code ANNI
 *
 * Transaction settles annuity related to credit, insurance, investments, other.n
 */
class ANNI extends PurposeCode
{
    private string $code = 'ANNI';
    private string $description = 'Transaction settles annuity related to credit, insurance, investments, other.n';
}