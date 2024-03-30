<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code FNET
 *
 * Cash associated with a netting of futures payments. Refer to CCPM codeword for netting of initial and variation margin through a CCP
 */
class FNET extends PurposeCode
{
    private string $code = 'FNET';
    private string $description = 'Cash associated with a netting of futures payments. Refer to CCPM codeword for netting of initial and variation margin through a CCP';
}