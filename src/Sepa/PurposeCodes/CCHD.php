<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CCHD
 *
 * Payments made by Government institute related to cash compensation, helplessness, disability. These payments are made by the Government institution as a social benefit in addition to regularly paid salary or pension.
 */
class CCHD extends PurposeCode
{
    private string $code = 'CCHD';
    private string $description = 'Payments made by Government institute related to cash compensation, helplessness, disability. These payments are made by the Government institution as a social benefit in addition to regularly paid salary or pension.';
}