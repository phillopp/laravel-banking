<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code BLDM
 *
 * Transaction is related to a payment associated with building maintenance.
 */
class BLDM extends PurposeCode
{
    private string $code = 'BLDM';
    private string $description = 'Transaction is related to a payment associated with building maintenance.';
}