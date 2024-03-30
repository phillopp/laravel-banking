<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code EDUC
 *
 * Transaction is related to a payment of study/tuition fees.
 */
class EDUC extends PurposeCode
{
    private string $code = 'EDUC';
    private string $description = 'Transaction is related to a payment of study/tuition fees.';
}