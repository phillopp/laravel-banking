<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code MBSB
 *
 * MBS Broker Owned Segregated (40Act/Dodd Frank) Cash Collateral - Any cash payment related to the collateral for a Mortgage Back Security, which is segregated, and not available for use by the client.
 */
class MBSB extends PurposeCode
{
    private string $code = 'MBSB';
    private string $description = 'MBS Broker Owned Segregated (40Act/Dodd Frank) Cash Collateral - Any cash payment related to the collateral for a Mortgage Back Security, which is segregated, and not available for use by the client.';
}