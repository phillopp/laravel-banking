<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code DERI
 *
 * Transaction is related to a derivatives transaction
 */
class DERI extends PurposeCode
{
    private string $code = 'DERI';
    private string $description = 'Transaction is related to a derivatives transaction';
}