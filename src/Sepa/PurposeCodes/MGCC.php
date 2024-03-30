<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code MGCC
 *
 * Initial futures margin. Where such payment is owned by the client and is available for use by them on return
 */
class MGCC extends PurposeCode
{
    private string $code = 'MGCC';
    private string $description = 'Initial futures margin. Where such payment is owned by the client and is available for use by them on return';
}