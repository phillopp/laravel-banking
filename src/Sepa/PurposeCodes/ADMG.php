<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code ADMG
 *
 * Transaction is related to a payment associated with administrative management.
 */
class ADMG extends PurposeCode
{
    private string $code = 'ADMG';
    private string $description = 'Transaction is related to a payment associated with administrative management.';
}