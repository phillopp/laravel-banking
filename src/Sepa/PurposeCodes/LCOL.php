<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code LCOL
 *
 * Free movement of cash collateral. Cash collateral paid by the borrower is done separately from the delivery of the shares at loan opening or return of collateral done separately from return of the loaned security. Note: common when the currency of the security is different the currency of the cash collateral.
 */
class LCOL extends PurposeCode
{
    private string $code = 'LCOL';
    private string $description = 'Free movement of cash collateral. Cash collateral paid by the borrower is done separately from the delivery of the shares at loan opening or return of collateral done separately from return of the loaned security. Note: common when the currency of the security is different the currency of the cash collateral.';
}