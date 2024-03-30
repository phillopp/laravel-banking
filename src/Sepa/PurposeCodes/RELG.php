<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code RELG
 *
 * Transaction is for general rental/lease.
 */
class RELG extends PurposeCode
{
    private string $code = 'RELG';
    private string $description = 'Transaction is for general rental/lease.';
}