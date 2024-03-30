<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CCSM
 *
 * CCP Segregated initial margin: Initial margin on OTC Derivatives cleared through a CCP that requires segregation
 */
class CCSM extends PurposeCode
{
    private string $code = 'CCSM';
    private string $description = 'CCP Segregated initial margin: Initial margin on OTC Derivatives cleared through a CCP that requires segregation';
}