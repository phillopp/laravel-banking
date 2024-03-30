<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SWCC
 *
 * Cash collateral payment for swaps associated with an ISDA agreement. Where such payment is not segregated andis available for use by the client upon return. Includes any cash collateral payments made under the terms of a CSAagreement for instruments such as swaps and FX forwards.
 */
class SWCC extends PurposeCode
{
    private string $code = 'SWCC';
    private string $description = 'Cash collateral payment for swaps associated with an ISDA agreement. Where such payment is not segregated andis available for use by the client upon return. Includes any cash collateral payments made under the terms of a CSAagreement for instruments such as swaps and FX forwards.';
}