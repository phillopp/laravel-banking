<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code CDOC
 *
 * A service which allows the card acceptor to effect a credit to a cardholder' account. Unlike a Merchant Refund, an Original Credit is not preceded by a card payment. This service is used for example for crediting winnings from gaming.
 */
class CDOC extends PurposeCode
{
    private string $code = 'CDOC';
    private string $description = 'A service which allows the card acceptor to effect a credit to a cardholder account. Unlike a Merchant Refund, an Original Credit is not preceded by a card payment. This service is used for example for crediting winnings from gaming.';
}