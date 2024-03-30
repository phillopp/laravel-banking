<?php

namespace Phillopp\LaravelBanking\Iban;

use Iban\Validation\Iban as IbanObject;
use Illuminate\Support\Str;

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

    public static function epcContentFromAccount(
        \Phillopp\LaravelBanking\Models\Bankaccount $account,
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

        $beneficiary = Str::substr($account->getAccountHolder(), 0, 70);
        $iban = $account->getIban();
        $iban = $iban->getNormalizedIban();

        $epcDefault = "BCD\n002\n1\nSCT\n%s\n%s\n%s\nEUR%s\n\n%s\n%s\n%s";
        $epcString = sprintf($epcDefault, $account->getBic(), $beneficiary, $iban, $amount, $reference, $purpose, $userHint);
        return $epcString;
    }

    public static function epcContent(
        string $beneficiary,
        string $bic = '',
        string $iban,
        float $amount,
        string $reference = '',
        string $purpose = '',
        string $userHint = '',
    ): string
    {
        /*
            BCD
            001
            1
            SCT
            BFSWDE33BER => $bic
            Wikimedia Foerdergesellschaft => $beneficiary (max. 70 Char)
            DE33100205000001194700 => $iban
            EUR123.45 => $amount
            
            => $reference (strukturierter Zeichen-Code mit bis zu 25 Zeichen gem. ISO 11649 RF Creditor Reference, optional)
            Spende fuer Wikipedia => $purpose (max. 140 char)
            => $userHint (max. 70 Char)
        */

        $beneficiary = Str::substr($beneficiary, 0, 70);
        $iban = new IbanObject($iban);
        $iban = $iban->getNormalizedIban();

        $epcDefault = "BCD\n002\n1\nSCT\n%s\n%s\n%s\nEUR%s\n\n%s\n%s\n%s";
        $epcString = sprintf($epcDefault, $bic, $beneficiary, $iban, $amount, $reference, $purpose, $userHint);
        return $epcString;
    }
}