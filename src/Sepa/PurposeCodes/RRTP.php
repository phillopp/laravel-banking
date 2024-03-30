<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code RRTP
 *
 * Transaction is related to a Request to Pay.
 */
class RRTP extends PurposeCode
{
    private string $code = 'RRTP';
    private string $description = 'Transaction is related to a Request to Pay.';
}