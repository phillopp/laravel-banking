<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code PENO
 *
 * Payment based on enforcement orders except those arising from judicial alimony decrees.
 */
class PENO extends PurposeCode
{
    private string $code = 'PENO';
    private string $description = 'Payment based on enforcement orders except those arising from judicial alimony decrees.';
}