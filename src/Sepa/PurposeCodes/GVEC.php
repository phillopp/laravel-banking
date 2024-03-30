<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code GVEC
 *
 * Transaction is payment to category C Austrian government employees.
 */
class GVEC extends PurposeCode
{
    private string $code = 'GVEC';
    private string $description = 'Transaction is payment to category C Austrian government employees.';
}