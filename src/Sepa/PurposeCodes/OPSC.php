<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code OPSC
 *
 * Option Client Owned Cash Segregated Cash Collateral - Any cash payment related to the collateral for an OTC option, which is owned by the client and is available for use by the client when it is returned to them from the segregated account
 */
class OPSC extends PurposeCode
{
    private string $code = 'OPSC';
    private string $description = 'Option Client Owned Cash Segregated Cash Collateral - Any cash payment related to the collateral for an OTC option, which is owned by the client and is available for use by the client when it is returned to them from the segregated account';
}