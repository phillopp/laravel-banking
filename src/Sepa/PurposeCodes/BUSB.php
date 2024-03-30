<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code BUSB
 *
 * Transaction is a payment for bus transport related business.
 */
class BUSB extends PurposeCode
{
    private string $code = 'BUSB';
    private string $description = 'Transaction is a payment for bus transport related business.';
}