<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code LBIN
 *
 * Net payment related to a buy-in. When an investment manager is bought in on a sell trade that fails due to a failed securities lending recall, the IM may seize the underlying collateral to pay for the buy-in. Any difference between the value of the collateral and the sell proceeds would be paid or received under this code
 */
class LBIN extends PurposeCode
{
    private string $code = 'LBIN';
    private string $description = 'Net payment related to a buy-in. When an investment manager is bought in on a sell trade that fails due to a failed securities lending recall, the IM may seize the underlying collateral to pay for the buy-in. Any difference between the value of the collateral and the sell proceeds would be paid or received under this code';
}