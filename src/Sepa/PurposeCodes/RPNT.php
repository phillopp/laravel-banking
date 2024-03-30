<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code RPNT
 *
 * Bi-lateral repo interest net/bulk payment at rollover/pair-off or other closing scenarios where applicable
 */
class RPNT extends PurposeCode
{
    private string $code = 'RPNT';
    private string $description = 'Bi-lateral repo interest net/bulk payment at rollover/pair-off or other closing scenarios where applicable';
}