<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code IPU2
 *
 * Transaction is made via an unattending vending machine by using 2-factor-authentification.
 */
class IPU2 extends PurposeCode
{
    private string $code = 'IPU2';
    private string $description = 'Transaction is made via an unattending vending machine by using 2-factor-authentification.';
}