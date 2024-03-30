<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code RCKE
 *
 * Transaction is related to a payment associated with a re-presented check entry
 */
class RCKE extends PurposeCode
{
    private string $code = 'RCKE';
    private string $description = 'Transaction is related to a payment associated with a re-presented check entry';
}