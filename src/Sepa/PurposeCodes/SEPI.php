<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SEPI
 *
 * Transaction is the payment of a purchase of securities where custodian bank and current account servicing bank coincide
 */
class SEPI extends PurposeCode
{
    private string $code = 'SEPI';
    private string $description = 'Transaction is the payment of a purchase of securities where custodian bank and current account servicing bank coincide';
}