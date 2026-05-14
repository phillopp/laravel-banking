<?php

namespace Phillopp\LaravelBanking\Iban;

use Iban\Validation\Iban as IbanObject;
use Illuminate\Support\Str;
use Phillopp\LaravelBanking\Models\Bankaccount;

class Service
{
    const FORMAT_PRINT = IbanObject::FORMAT_PRINT;
    const FORMAT_ELECTRONIC = IbanObject::FORMAT_ELECTRONIC;

    public static function create(string $ibanString): IbanObject
    {
        return new IbanObject($ibanString);
    }

    public static function format(string $ibanString, string $format = self::FORMAT_PRINT): string
    {
        $iban = new IbanObject($ibanString);
        return $iban->format($format);
    }

    /**
     * Gets Girocode-Content for given Account
     * @param Bankaccount $account
     * @param float $amount
     * @param string $reference
     * @param string $purpose
     * @param string $userHint
     * @return string
     * @throws \Exception
     */
    public static function epcContentFromAccount(
        Bankaccount $account,
        float $amount,
        string $reference = '',
        string $purpose = '',
        string $userHint = ''
    )
    {
        if(empty($reference) && empty($purpose)) {
            throw new \Exception('Reference or purpose must be set!');
        }
        if(!empty($reference) && !empty($purpose)) {
            throw new \Exception('You can only set reference or purpose');
        }

        return self::epcContent(
            Str::substr($account->getAccountHolder(), 0, 70),
            $account->getBic(),
            $account->getIban()->getNormalizedIban(),
            $amount,
            $reference,
            $purpose,
            $userHint
        );
    }

    public static function epcContent(
        string $beneficiary,
        string $bic,
        string $iban,
        float $amount,
        string $reference = '',
        string $purpose = '',
        string $userHint = '',
    ): string
    {
        $beneficiary = Str::substr($beneficiary, 0, 70);
        $iban = new IbanObject($iban);
        $iban = $iban->getNormalizedIban();

        $epcDefault = "BCD\n002\n1\nSCT\n%s\n%s\n%s\nEUR%s\n\n%s\n%s\n%s";
        return sprintf($epcDefault, $bic, $beneficiary, $iban, $amount, $reference, $purpose, $userHint);
    }
}