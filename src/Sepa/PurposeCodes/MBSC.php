<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code MBSC
 *
 * MBS Client Owned Cash Segregated (40Act/Dodd Frank) Cash Collateral - Any cash payment related to the collateral for a Mortgage Back Security, which is owned by the client and is available for use by the client when it is returned to them from the segregated account
 */
class MBSC extends PurposeCode
{
    private string $code = 'MBSC';
    private string $description = 'MBS Client Owned Cash Segregated (40Act/Dodd Frank) Cash Collateral - Any cash payment related to the collateral for a Mortgage Back Security, which is owned by the client and is available for use by the client when it is returned to them from the segregated account';
}