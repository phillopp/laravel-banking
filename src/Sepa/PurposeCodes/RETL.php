<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code RETL
 *
 * Retail payment including e-commerce and online shopping.
 */
class RETL extends PurposeCode
{
    private string $code = 'RETL';
    private string $description = 'Retail payment including e-commerce and online shopping.';
}