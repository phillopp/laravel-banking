<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code ECPG
 *
 * E-Commerce payment with payment guarantee of the issuing bank.
 */
class ECPG extends PurposeCode
{
    private string $code = 'ECPG';
    private string $description = 'E-Commerce payment with payment guarantee of the issuing bank.';
}