<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code NWCM
 *
 * Transaction is related to a payment of network communication.
 */
class NWCM extends PurposeCode
{
    private string $code = 'NWCM';
    private string $description = 'Transaction is related to a payment of network communication.';
}