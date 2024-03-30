<?php

namespace Phillopp\LaravelBanking\Sepa\PurposeCodes;

use Phillopp\LaravelBanking\Sepa\PurposeCode;

/**
 * SEPA-Purpose Code MP2P
 *
 * A service which enables a user to use an app on its mobile to initiate moving funds from his/her bank account to another person’s bank account while not using the account number  but an alias information like an MSISDN as account addressing information in his/her app.
 */
class MP2P extends PurposeCode
{
    private string $code = 'MP2P';
    private string $description = 'A service which enables a user to use an app on its mobile to initiate moving funds from his/her bank account to another person’s bank account while not using the account number  but an alias information like an MSISDN as account addressing information in his/her app.';
}