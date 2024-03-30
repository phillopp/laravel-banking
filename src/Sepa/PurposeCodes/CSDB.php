<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CSDB
 *
 * Transaction is related to cash disbursement.
 */
class CSDB extends PurposeCode
{
    private string $code = 'CSDB';
    private string $description = 'Transaction is related to cash disbursement.';
}