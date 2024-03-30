<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CAEQ
 *
 * Securities Lending-Settlement of Corporate Actions: Equities transactions.
 */
class CAEQ extends PurposeCode
{
    private string $code = 'CAEQ';
    private string $description = 'Securities Lending-Settlement of Corporate Actions: Equities transactions.';
}