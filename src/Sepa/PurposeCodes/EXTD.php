<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code EXTD
 *
 * Cash collateral related to trading of exchanged traded derivatives in general (Opposite to Over the Counter (OTC)).
 */
class EXTD extends PurposeCode
{
    private string $code = 'EXTD';
    private string $description = 'Cash collateral related to trading of exchanged traded derivatives in general (Opposite to Over the Counter (OTC)).';
}