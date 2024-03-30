<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code DNTS
 *
 * Transaction is a payment for dental services.
 */
class DNTS extends PurposeCode
{
    private string $code = 'DNTS';
    private string $description = 'Transaction is a payment for dental services.';
}