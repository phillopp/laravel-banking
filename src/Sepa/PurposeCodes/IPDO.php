<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code IPDO
 *
 * Transaction in which the amount is available to the payee immediately, done for donations, with sending the address data of the payer.
 */
class IPDO extends PurposeCode
{
    private string $code = 'IPDO';
    private string $description = 'Transaction in which the amount is available to the payee immediately, done for donations, with sending the address data of the payer.';
}