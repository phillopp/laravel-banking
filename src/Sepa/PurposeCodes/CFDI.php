<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CFDI
 *
 * Transaction is the payment of capital falling due where custodian bank and current account servicing bank coincide
 */
class CFDI extends PurposeCode
{
    private string $code = 'CFDI';
    private string $description = 'Transaction is the payment of capital falling due where custodian bank and current account servicing bank coincide';
}