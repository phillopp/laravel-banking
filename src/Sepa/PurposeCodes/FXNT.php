<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code FXNT
 *
 * FX netting if cash is moved by separate wire instead of within the closing FX instruction
 */
class FXNT extends PurposeCode
{
    private string $code = 'FXNT';
    private string $description = 'FX netting if cash is moved by separate wire instead of within the closing FX instruction';
}