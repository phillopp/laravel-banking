<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code IPAY
 *
 * Transaction in which the amount is available to the payee immediately.
 */
class IPAY extends PurposeCode
{
    private string $code = 'IPAY';
    private string $description = 'Transaction in which the amount is available to the payee immediately.';
}