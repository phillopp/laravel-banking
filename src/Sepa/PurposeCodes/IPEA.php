<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code IPEA
 *
 * Transaction in which the amount is available to the payee immediately, done in E-commerce, without sending the address data of the payer.
 */
class IPEA extends PurposeCode
{
    private string $code = 'IPEA';
    private string $description = 'Transaction in which the amount is available to the payee immediately, done in E-commerce, without sending the address data of the payer.';
}