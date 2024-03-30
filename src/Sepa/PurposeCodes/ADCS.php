<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code ADCS
 *
 * Payments for donation, sponsorship, advisory, intellectual and other copyright services.
 */
class ADCS extends PurposeCode
{
    private string $code = 'ADCS';
    private string $description = 'Payments for donation, sponsorship, advisory, intellectual and other copyright services.';
}