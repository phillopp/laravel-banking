<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code FLCR
 *
 * Card Settlement-Settlement of Fleet transactions.
 */
class FLCR extends PurposeCode
{
    private string $code = 'FLCR';
    private string $description = 'Card Settlement-Settlement of Fleet transactions.';
}