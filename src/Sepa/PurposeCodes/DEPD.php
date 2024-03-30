<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code DEPD
 *
 * Transaction is related to a payment concerning dependent support, for example child support or support for a person substantially financially dependent on the support provider.
 */
class DEPD extends PurposeCode
{
    private string $code = 'DEPD';
    private string $description = 'Transaction is related to a payment concerning dependent support, for example child support or support for a person substantially financially dependent on the support provider.';
}