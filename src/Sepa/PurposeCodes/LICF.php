<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code LICF
 *
 * Transaction is payment of a license fee.
 */
class LICF extends PurposeCode
{
    private string $code = 'LICF';
    private string $description = 'Transaction is payment of a license fee.';
}