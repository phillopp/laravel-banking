<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code DSMT
 *
 * Transaction is the payment of a disbursement due to a specific type of printed order for a payment of a  specified sum, issued by a bank or a post office (Zahlungsanweisung zur Verrechnung)
 */
class DSMT extends PurposeCode
{
    private string $code = 'DSMT';
    private string $description = 'Transaction is the payment of a disbursement due to a specific type of printed order for a payment of a  specified sum, issued by a bank or a post office (Zahlungsanweisung zur Verrechnung)';
}