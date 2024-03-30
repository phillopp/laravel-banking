<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SUBS
 *
 * Transaction is related to a payment of information or entertainment services either in printed or electronic form.
 */
class SUBS extends PurposeCode
{
    private string $code = 'SUBS';
    private string $description = 'Transaction is related to a payment of information or entertainment services either in printed or electronic form.';
}