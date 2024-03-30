<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CCPM
 *
 * Cash Collateral associated with an ISDA or Central Clearing Agreement that is covering the variation margin requirements for OTC trades clearing through a CCP. 
 */
class CCPM extends PurposeCode
{
    private string $code = 'CCPM';
    private string $description = 'Cash Collateral associated with an ISDA or Central Clearing Agreement that is covering the variation margin requirements for OTC trades clearing through a CCP. ';
}