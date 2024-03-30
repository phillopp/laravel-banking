<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SWBC
 *
 * Cash collateral payment for swaps associated with an ISDA agreement. . Where such payment is segregated andnot available for use by the client. Includes any cash collateral payments made under the terms of a CSA agreementfor instruments such as swaps and FX forwards.
 */
class SWBC extends PurposeCode
{
    private string $code = 'SWBC';
    private string $description = 'Cash collateral payment for swaps associated with an ISDA agreement. . Where such payment is segregated andnot available for use by the client. Includes any cash collateral payments made under the terms of a CSA agreementfor instruments such as swaps and FX forwards.';
}