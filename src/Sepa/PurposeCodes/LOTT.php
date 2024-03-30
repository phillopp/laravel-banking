<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code LOTT
 *
 * General-Payment towards a purchase or winnings received from lottery activities.
 */
class LOTT extends PurposeCode
{
    private string $code = 'LOTT';
    private string $description = 'General-Payment towards a purchase or winnings received from lottery activities.';
}