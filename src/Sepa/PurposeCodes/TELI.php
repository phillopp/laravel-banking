<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code TELI
 *
 * Transaction is related to a payment initiated via telephone.
 */
class TELI extends PurposeCode
{
    private string $code = 'TELI';
    private string $description = 'Transaction is related to a payment initiated via telephone.';
}