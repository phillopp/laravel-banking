<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code MARG
 *
 * Daily margin on listed derivatives – not segregated as collateral associated with an FCM agreement. Examplesinclude listed futures and options margin payments; premiums for listed options not covered in the MT54X message
 */
class MARG extends PurposeCode
{
    private string $code = 'MARG';
    private string $description = 'Daily margin on listed derivatives – not segregated as collateral associated with an FCM agreement. Examplesinclude listed futures and options margin payments; premiums for listed options not covered in the MT54X message';
}