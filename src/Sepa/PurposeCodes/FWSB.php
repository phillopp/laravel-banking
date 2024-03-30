<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code FWSB
 *
 * Any cash payment related to the collateral for a Master Agreement forward, which is segregated, and not available for use by the client. Example master agreement forwards include TBA, repo and Bond Forwards.
 */
class FWSB extends PurposeCode
{
    private string $code = 'FWSB';
    private string $description = 'Any cash payment related to the collateral for a Master Agreement forward, which is segregated, and not available for use by the client. Example master agreement forwards include TBA, repo and Bond Forwards.';
}