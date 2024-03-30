<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code RPSB
 *
 * Bi-lateral repo broker owned segregated cash collateral associated with a repo master agreement
 */
class RPSB extends PurposeCode
{
    private string $code = 'RPSB';
    private string $description = 'Bi-lateral repo broker owned segregated cash collateral associated with a repo master agreement';
}