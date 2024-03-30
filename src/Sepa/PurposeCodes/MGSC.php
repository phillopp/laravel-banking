<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code MGSC
 *
 * Margin Client Owned Segregated Cash Collateral - Any cash payment related to the collateral for initial futures margin, which is owned by the client and is available for use by the client when it is returned to them from the segregated account.
 */
class MGSC extends PurposeCode
{
    private string $code = 'MGSC';
    private string $description = 'Margin Client Owned Segregated Cash Collateral - Any cash payment related to the collateral for initial futures margin, which is owned by the client and is available for use by the client when it is returned to them from the segregated account.';
}