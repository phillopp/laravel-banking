<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code COMC
 *
 * Transaction is related to a payment of commercial credit or debit. (formerly CommercialCredit)
 */
class COMC extends PurposeCode
{
    private string $code = 'COMC';
    private string $description = 'Transaction is related to a payment of commercial credit or debit. (formerly CommercialCredit)';
}