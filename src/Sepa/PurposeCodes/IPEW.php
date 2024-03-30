<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code IPEW
 *
 * Transaction in which the amount is available to the payee immediately, done in E-commerce.
 */
class IPEW extends PurposeCode
{
    private string $code = 'IPEW';
    private string $description = 'Transaction in which the amount is available to the payee immediately, done in E-commerce.';
}