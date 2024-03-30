<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code IPUW
 *
 * Transaction is made via an unattending vending machine by without using 2-factor-authentification.
 */
class IPUW extends PurposeCode
{
    private string $code = 'IPUW';
    private string $description = 'Transaction is made via an unattending vending machine by without using 2-factor-authentification.';
}