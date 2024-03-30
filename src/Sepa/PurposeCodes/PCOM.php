<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code PCOM
 *
 * Final payment to complete the purchase of a property.
 */
class PCOM extends PurposeCode
{
    private string $code = 'PCOM';
    private string $description = 'Final payment to complete the purchase of a property.';
}