<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code ANTS
 *
 * Transaction is a payment for anesthesia services.
 */
class ANTS extends PurposeCode
{
    private string $code = 'ANTS';
    private string $description = 'Transaction is a payment for anesthesia services.';
}