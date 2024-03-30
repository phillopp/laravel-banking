<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SWSC
 *
 * Swaps Client Owned Segregated Cash Collateral - Any cash payment related to the collateral for Swap margin,which is owned by the client and is available for use by the client when returned from the segregated account. Thisincludes any collateral identified in a CSA agreement such as Swap or FX Forward collateral.
 */
class SWSC extends PurposeCode
{
    private string $code = 'SWSC';
    private string $description = 'Swaps Client Owned Segregated Cash Collateral - Any cash payment related to the collateral for Swap margin,which is owned by the client and is available for use by the client when returned from the segregated account. Thisincludes any collateral identified in a CSA agreement such as Swap or FX Forward collateral.';
}