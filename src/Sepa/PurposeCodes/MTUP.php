<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code MTUP
 *
 * A Service that is first reserving money from a card account and then is loading a prepaid mobile phone amount by this amount.
 */
class MTUP extends PurposeCode
{
    private string $code = 'MTUP';
    private string $description = 'A Service that is first reserving money from a card account and then is loading a prepaid mobile phone amount by this amount.';
}