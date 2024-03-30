<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code PADD
 *
 * Transaction is related to a pre-authorized debit origination
 */
class PADD extends PurposeCode
{
    private string $code = 'PADD';
    private string $description = 'Transaction is related to a pre-authorized debit origination';
}