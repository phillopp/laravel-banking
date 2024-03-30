<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code FWLV
 *
 * Transaction is related to a payment of Foreign Worker Levy
 */
class FWLV extends PurposeCode
{
    private string $code = 'FWLV';
    private string $description = 'Transaction is related to a payment of Foreign Worker Levy';
}