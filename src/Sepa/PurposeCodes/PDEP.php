<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code PDEP
 *
 * Payment of the deposit required towards purchase of a property.
 */
class PDEP extends PurposeCode
{
    private string $code = 'PDEP';
    private string $description = 'Payment of the deposit required towards purchase of a property.';
}