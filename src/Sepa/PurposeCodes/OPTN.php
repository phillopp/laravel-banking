<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code OPTN
 *
 * Cash collateral related to trading of option on Foreign Exchange.
 */
class OPTN extends PurposeCode
{
    private string $code = 'OPTN';
    private string $description = 'Cash collateral related to trading of option on Foreign Exchange.';
}