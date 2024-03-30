<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code GWLT
 *
 * Payment to victims of war violence and to disabled soldiers.
 */
class GWLT extends PurposeCode
{
    private string $code = 'GWLT';
    private string $description = 'Payment to victims of war violence and to disabled soldiers.';
}