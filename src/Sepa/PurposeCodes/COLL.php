<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code COLL
 *
 * Transaction is a collection of funds initiated via a credit transfer or direct debit.
 */
class COLL extends PurposeCode
{
    private string $code = 'COLL';
    private string $description = 'Transaction is a collection of funds initiated via a credit transfer or direct debit.';
}