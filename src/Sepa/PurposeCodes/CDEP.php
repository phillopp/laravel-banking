<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CDEP
 *
 * Payment related to a credit default event
 */
class CDEP extends PurposeCode
{
    private string $code = 'CDEP';
    private string $description = 'Payment related to a credit default event';
}