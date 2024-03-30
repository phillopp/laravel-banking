<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code NOWS
 *
 * Transaction is related to a payment for type of services not specified elsewhere.
 */
class NOWS extends PurposeCode
{
    private string $code = 'NOWS';
    private string $description = 'Transaction is related to a payment for type of services not specified elsewhere.';
}