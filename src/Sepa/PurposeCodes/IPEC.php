<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code IPEC
 *
 * Transaction in which the amount is available to the payee immediately, done in E-commerce, with sending the address data of the payer.
 */
class IPEC extends PurposeCode
{
    private string $code = 'IPEC';
    private string $description = 'Transaction in which the amount is available to the payee immediately, done in E-commerce, with sending the address data of the payer.';
}