<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code LIMA
 *
 * Bank initiated account transfer to support zero target balance management, pooling or sweeping.
 */
class LIMA extends PurposeCode
{
    private string $code = 'LIMA';
    private string $description = 'Bank initiated account transfer to support zero target balance management, pooling or sweeping.';
}