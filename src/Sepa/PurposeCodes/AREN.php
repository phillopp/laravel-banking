<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code AREN
 *
 * Transaction is related to a payment associated with an Account Receivable Entry
 */
class AREN extends PurposeCode
{
    private string $code = 'AREN';
    private string $description = 'Transaction is related to a payment associated with an Account Receivable Entry';
}