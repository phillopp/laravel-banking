<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code WHLD
 *
 * Transaction is related to a payment of withholding tax.
 */
class WHLD extends PurposeCode
{
    private string $code = 'WHLD';
    private string $description = 'Transaction is related to a payment of withholding tax.';
}