<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code LSFL
 *
 * Payments made by a borrower to a lending agent to satisfy claims made by the investment manager related to sell fails from late loan recall deliveries
 */
class LSFL extends PurposeCode
{
    private string $code = 'LSFL';
    private string $description = 'Payments made by a borrower to a lending agent to satisfy claims made by the investment manager related to sell fails from late loan recall deliveries';
}