<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CABD
 *
 * Securities Lending-Settlement of Corporate Actions: Bonds transactions.
 */
class CABD extends PurposeCode
{
    private string $code = 'CABD';
    private string $description = 'Securities Lending-Settlement of Corporate Actions: Bonds transactions.';
}