<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code GVEB
 *
 * Transaction is payment to category B Austrian government employees.
 */
class GVEB extends PurposeCode
{
    private string $code = 'GVEB';
    private string $description = 'Transaction is payment to category B Austrian government employees.';
}