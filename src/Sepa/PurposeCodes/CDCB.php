<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CDCB
 *
 * Purchase of Goods and Services with additional Cash disbursement at the POI (Cashback)
 */
class CDCB extends PurposeCode
{
    private string $code = 'CDCB';
    private string $description = 'Purchase of Goods and Services with additional Cash disbursement at the POI (Cashback)';
}