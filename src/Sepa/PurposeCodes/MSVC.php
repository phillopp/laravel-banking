<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code MSVC
 *
 * Transaction is related to a payment for multiple service types.
 */
class MSVC extends PurposeCode
{
    private string $code = 'MSVC';
    private string $description = 'Transaction is related to a payment for multiple service types.';
}