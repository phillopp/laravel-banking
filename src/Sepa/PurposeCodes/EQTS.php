<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code EQTS
 *
 * Securities Lending-Settlement of Equities transactions.
 */
class EQTS extends PurposeCode
{
    private string $code = 'EQTS';
    private string $description = 'Securities Lending-Settlement of Equities transactions.';
}