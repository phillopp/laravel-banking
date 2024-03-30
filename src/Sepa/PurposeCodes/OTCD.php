<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code OTCD
 *
 * Cash collateral related to Over-the-counter (OTC) Derivatives in general for example contracts which are traded and privately negotiated.
 */
class OTCD extends PurposeCode
{
    private string $code = 'OTCD';
    private string $description = 'Cash collateral related to Over-the-counter (OTC) Derivatives in general for example contracts which are traded and privately negotiated.';
}