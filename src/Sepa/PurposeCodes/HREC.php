<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code HREC
 *
 * Transaction is a contribution by an employer to the housing expenditures (purchase, construction, renovation) of the employees within a tax free fringe benefit system 
 */
class HREC extends PurposeCode
{
    private string $code = 'HREC';
    private string $description = 'Transaction is a contribution by an employer to the housing expenditures (purchase, construction, renovation) of the employees within a tax free fringe benefit system ';
}