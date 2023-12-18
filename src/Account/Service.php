<?php

namespace Phillopp\LaravelBanking\Account;

use Phillopp\LaravelBanking\Models\Bankaccount;

class Service
{
    public static function get(string $account = 'default'): Bankaccount
    {
        return new Bankaccount(
            config('company.bankaccounts.default.iban'),
            config('company.bankaccounts.default.bic'),
            config('company.bankaccounts.default.accountholder') ?? config('company.name'),
            config('company.bankaccounts.default.bank', ''),
        );
    }
}