<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CDDP
 *
 * A combined service which enables the card acceptor to perform an authorisation for a temporary amount and a completion for the final amount within a limited time frame. Deferred Payment is only available in the unattended environment.Examples where this service is widely used are unattended petrol pumps and phone booths
 */
class CDDP extends PurposeCode
{
    private string $code = 'CDDP';
    private string $description = 'A combined service which enables the card acceptor to perform an authorisation for a temporary amount and a completion for the final amount within a limited time frame. Deferred Payment is only available in the unattended environment.Examples where this service is widely used are unattended petrol pumps and phone booths';
}