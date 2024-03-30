<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code EPAY
 *
 * Transaction is related to ePayment.
 */
class EPAY extends PurposeCode
{
    private string $code = 'EPAY';
    private string $description = 'Transaction is related to ePayment.';
}