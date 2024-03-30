<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code BKFE
 *
 * Bank loan fees. Cash activity related to specific bank loan fees, including (a) agent / assignment fees; (b) amendment fees; (c) commitment fees; (d) consent fees; (e) cost of carry fees; (f) delayed compensation fees; (g)facility fees; (h) fronting fees; (i) funding fees; (j) letter of credit assignment fees
 */
class BKFE extends PurposeCode
{
    private string $code = 'BKFE';
    private string $description = 'Bank loan fees. Cash activity related to specific bank loan fees, including (a) agent / assignment fees; (b) amendment fees; (c) commitment fees; (d) consent fees; (e) cost of carry fees; (f) delayed compensation fees; (g)facility fees; (h) fronting fees; (i) funding fees; (j) letter of credit assignment fees';
}