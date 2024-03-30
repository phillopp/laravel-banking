<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code BOND
 *
 * Securities Lending-Settlement of Bond transaction.
 */
class BOND extends PurposeCode
{
    private string $code = 'BOND';
    private string $description = 'Securities Lending-Settlement of Bond transaction.';
}