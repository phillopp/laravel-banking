<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SSBE
 *
 * Transaction is a social security benefit, ie payment made by a government to support individuals.
 */
class SSBE extends PurposeCode
{
    private string $code = 'SSBE';
    private string $description = 'Transaction is a social security benefit, ie payment made by a government to support individuals.';
}