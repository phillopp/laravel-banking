<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code MDCS
 *
 * Transaction is a payment for medical care services.
 */
class MDCS extends PurposeCode
{
    private string $code = 'MDCS';
    private string $description = 'Transaction is a payment for medical care services.';
}