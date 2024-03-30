<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SWSB
 *
 * Swaps Broker Owned Segregated Cash Collateral - Any cash payment related to the collateral for Swap margin ,which is segregated, and not available for use by the client. This includes any collateral identified in a CSAagreement such as Swap or FX Forward collateral.
 */
class SWSB extends PurposeCode
{
    private string $code = 'SWSB';
    private string $description = 'Swaps Broker Owned Segregated Cash Collateral - Any cash payment related to the collateral for Swap margin ,which is segregated, and not available for use by the client. This includes any collateral identified in a CSAagreement such as Swap or FX Forward collateral.';
}