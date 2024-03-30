<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code ROYA
 *
 * Transaction is the payment of royalties.
 */
class ROYA extends PurposeCode
{
    private string $code = 'ROYA';
    private string $description = 'Transaction is the payment of royalties.';
}