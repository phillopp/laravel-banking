<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code AUCO
 *
 * Utilities-Settlement of Authenticated Collections transactions.
 */
class AUCO extends PurposeCode
{
    private string $code = 'AUCO';
    private string $description = 'Utilities-Settlement of Authenticated Collections transactions.';
}