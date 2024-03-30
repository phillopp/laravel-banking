<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code OPSB
 *
 * Option Broker Owned Segregated Cash Collateral - Any cash payment related to the collateral for an OTC option, which is segregated, and not available for use by the client.
 */
class OPSB extends PurposeCode
{
    private string $code = 'OPSB';
    private string $description = 'Option Broker Owned Segregated Cash Collateral - Any cash payment related to the collateral for an OTC option, which is segregated, and not available for use by the client.';
}