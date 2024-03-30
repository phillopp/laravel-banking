<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CDQC
 *
 * Purchase of Goods which are equivalent to cash like coupons in casinos.
 */
class CDQC extends PurposeCode
{
    private string $code = 'CDQC';
    private string $description = 'Purchase of Goods which are equivalent to cash like coupons in casinos.';
}