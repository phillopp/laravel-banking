<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code RAPI
 *
 * Instant Payments-Settlement of Rapid Payment Instruction (RPI) transactions.
 */
class RAPI extends PurposeCode
{
    private string $code = 'RAPI';
    private string $description = 'Instant Payments-Settlement of Rapid Payment Instruction (RPI) transactions.';
}