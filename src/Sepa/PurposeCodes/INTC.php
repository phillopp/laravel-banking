<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code INTC
 *
 * Transaction is an intra-company payment, ie, a payment between two companies belonging to the same group.
 */
class INTC extends PurposeCode
{
    private string $code = 'INTC';
    private string $description = 'Transaction is an intra-company payment, ie, a payment between two companies belonging to the same group.';
}