<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code TBCC
 *
 * Cash collateral payment (for use by client)for TBA securities associated with a TBA Master Agreement. Where such payment is not segregated and is available for use by the client upon return.
 */
class TBCC extends PurposeCode
{
    private string $code = 'TBCC';
    private string $description = 'Cash collateral payment (for use by client)for TBA securities associated with a TBA Master Agreement. Where such payment is not segregated and is available for use by the client upon return.';
}