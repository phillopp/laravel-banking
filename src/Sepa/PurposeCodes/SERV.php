<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SERV
 *
 * Transaction is related to service charges charged by a service provider.
 */
class SERV extends PurposeCode
{
    private string $code = 'SERV';
    private string $description = 'Transaction is related to service charges charged by a service provider.';
}