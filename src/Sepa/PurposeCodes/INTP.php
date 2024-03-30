<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code INTP
 *
 * Transaction is a payment between two accounts belonging to the same party (intra-party payment), where party is a natural person (identified by a private ID, not organisation ID).
 */
class INTP extends PurposeCode
{
    private string $code = 'INTP';
    private string $description = 'Transaction is a payment between two accounts belonging to the same party (intra-party payment), where party is a natural person (identified by a private ID, not organisation ID).';
}