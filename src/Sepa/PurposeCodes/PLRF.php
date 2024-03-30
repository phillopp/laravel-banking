<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code PLRF
 *
 * Transfer or extension of a property financing arrangement to a new deal or loan provider, without change of ownership of property.
 */
class PLRF extends PurposeCode
{
    private string $code = 'PLRF';
    private string $description = 'Transfer or extension of a property financing arrangement to a new deal or loan provider, without change of ownership of property.';
}