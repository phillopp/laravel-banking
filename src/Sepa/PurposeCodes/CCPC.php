<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CCPC
 *
 * Cash Collateral associated with an ISDA or Central Clearing Agreement that is covering the initial margin requirements for OTC trades clearing through a CCP. 
 */
class CCPC extends PurposeCode
{
    private string $code = 'CCPC';
    private string $description = 'Cash Collateral associated with an ISDA or Central Clearing Agreement that is covering the initial margin requirements for OTC trades clearing through a CCP. ';
}