<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CAFI
 *
 * Transaction is the payment of custodian account management fee where custodian bank and current account servicing bank coincide
 */
class CAFI extends PurposeCode
{
    private string $code = 'CAFI';
    private string $description = 'Transaction is the payment of custodian account management fee where custodian bank and current account servicing bank coincide';
}