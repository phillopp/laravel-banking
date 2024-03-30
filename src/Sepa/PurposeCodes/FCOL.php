<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code FCOL
 *
 * A Service that is settling card transaction related fees between two parties.
 */
class FCOL extends PurposeCode
{
    private string $code = 'FCOL';
    private string $description = 'A Service that is settling card transaction related fees between two parties.';
}