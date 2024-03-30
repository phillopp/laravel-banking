<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code TRVC
 *
 * Transaction is the payment of a travellers cheque
 */
class TRVC extends PurposeCode
{
    private string $code = 'TRVC';
    private string $description = 'Transaction is the payment of a travellers cheque';
}