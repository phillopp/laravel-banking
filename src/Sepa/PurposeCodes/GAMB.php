<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code GAMB
 *
 * General-Payments towards a purchase or winnings received from gambling, betting or other wagering activities.
 */
class GAMB extends PurposeCode
{
    private string $code = 'GAMB';
    private string $description = 'General-Payments towards a purchase or winnings received from gambling, betting or other wagering activities.';
}