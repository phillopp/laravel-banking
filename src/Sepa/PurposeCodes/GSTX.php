<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code GSTX
 *
 * Transaction is the payment of Goods & Services Tax
 */
class GSTX extends PurposeCode
{
    private string $code = 'GSTX';
    private string $description = 'Transaction is the payment of Goods & Services Tax';
}