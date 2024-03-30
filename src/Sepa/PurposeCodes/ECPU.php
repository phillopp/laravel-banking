<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code ECPU
 *
 * E-Commerce payment without payment guarantee of the issuing bank.
 */
class ECPU extends PurposeCode
{
    private string $code = 'ECPU';
    private string $description = 'E-Commerce payment without payment guarantee of the issuing bank.';
}