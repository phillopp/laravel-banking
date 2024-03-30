<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code TBBC
 *
 * Cash collateral payment (segregated) for TBA securities associated with a TBA Master Agreement. Where such payment is segregated and not available for use by the client.
 */
class TBBC extends PurposeCode
{
    private string $code = 'TBBC';
    private string $description = 'Cash collateral payment (segregated) for TBA securities associated with a TBA Master Agreement. Where such payment is segregated and not available for use by the client.';
}