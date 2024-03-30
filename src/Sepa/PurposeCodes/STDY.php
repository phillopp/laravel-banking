<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code STDY
 *
 * Transaction is related to a payment of study/tuition costs.
 */
class STDY extends PurposeCode
{
    private string $code = 'STDY';
    private string $description = 'Transaction is related to a payment of study/tuition costs.';
}