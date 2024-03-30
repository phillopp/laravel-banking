<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code ETUP
 *
 * Transaction is related to a Service that is first reserving money from a card account and then is loading an e-purse application by this amount.
 */
class ETUP extends PurposeCode
{
    private string $code = 'ETUP';
    private string $description = 'Transaction is related to a Service that is first reserving money from a card account and then is loading an e-purse application by this amount.';
}