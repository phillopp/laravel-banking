<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code MOMA
 *
 * Securities Lending-ettlement of Money Market PCH.
 */
class MOMA extends PurposeCode
{
    private string $code = 'MOMA';
    private string $description = 'Securities Lending-ettlement of Money Market PCH.';
}