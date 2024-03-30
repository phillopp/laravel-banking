<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code LFEE
 *
 * Fee payments, other than rebates, for securities lending. Includes (a) exclusive fees; (b) transaction fees; (c)custodian fees; (d) minimum balance fees
 */
class LFEE extends PurposeCode
{
    private string $code = 'LFEE';
    private string $description = 'Fee payments, other than rebates, for securities lending. Includes (a) exclusive fees; (b) transaction fees; (c)custodian fees; (d) minimum balance fees';
}