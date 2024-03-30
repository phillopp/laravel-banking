<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code SPLT
 *
 * Split payments. To be used when cash and security movements for a security trade settlement are instructedseparately.
 */
class SPLT extends PurposeCode
{
    private string $code = 'SPLT';
    private string $description = 'Split payments. To be used when cash and security movements for a security trade settlement are instructedseparately.';
}