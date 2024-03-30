<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code FWCC
 *
 * Cash collateral payment against a Master Forward Agreement (MFA) where the cash is owned and may be used by the client when returned. Includes any instruments with a forward settling date such TBAs, repurchase agreements and bond forwards
 */
class FWCC extends PurposeCode
{
    private string $code = 'FWCC';
    private string $description = 'Cash collateral payment against a Master Forward Agreement (MFA) where the cash is owned and may be used by the client when returned. Includes any instruments with a forward settling date such TBAs, repurchase agreements and bond forwards';
}