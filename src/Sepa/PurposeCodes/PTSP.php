<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code PTSP
 *
 * Transaction is related to payment terms specifications
 */
class PTSP extends PurposeCode
{
    private string $code = 'PTSP';
    private string $description = 'Transaction is related to payment terms specifications';
}