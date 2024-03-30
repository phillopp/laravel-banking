<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code BKDF
 *
 * Delayed draw funding. Certain issuers may utilize delayed draw loans whereby the lender is committed to fund cashwithin a specified period once a call is made by the issuer. The lender receives a fee for entering into such acommitment
 */
class BKDF extends PurposeCode
{
    private string $code = 'BKDF';
    private string $description = 'Delayed draw funding. Certain issuers may utilize delayed draw loans whereby the lender is committed to fund cashwithin a specified period once a call is made by the issuer. The lender receives a fee for entering into such acommitment';
}