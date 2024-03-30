<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code TRPT
 *
 * Transaction is for the payment to top-up pre-paid card and electronic road pricing for the purpose of transportation
 */
class TRPT extends PurposeCode
{
    private string $code = 'TRPT';
    private string $description = 'Transaction is for the payment to top-up pre-paid card and electronic road pricing for the purpose of transportation';
}