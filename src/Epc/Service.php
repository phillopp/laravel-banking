<?php

namespace Phillopp\LaravelBanking\Epc;

use Iban\Validation\Iban as IbanObject;
use Illuminate\Support\Str;
use Phillopp\LaravelBanking\Exception\InvalidEcpDataException;
use Phillopp\LaravelBanking\Models\Bankaccount;
use Phillopp\LaravelBanking\Models\Transfer;

class Service
{
    /**
     * Generates EPC-QR-Code Data-String
     * @param Bankaccount $account
     * @param float $amount
     * @param string $reference
     * @param string $purpose
     * @param string $userHint
     * @return string
     * @throws InvalidEcpDataException
     */
    public static function create(
        Bankaccount $account,
        float $amount,
        string $reference = '',
        string $purpose = '',
        string $userHint = ''
    ): string
    {
        $transfer = new Transfer($account, $amount, $purpose, $reference);
        return $transfer->getEpcData($userHint);
    }

    public static function fromString(
        string $beneficiary,
        string $bic,
        string $iban,
        float $amount,
        string $reference = '',
        string $purpose = '',
        string $userHint = '',
    ): string
    {
        $account = new Bankaccount($iban, $bic, $beneficiary);
        return self::create($account, $amount, $reference, $purpose, $userHint);
    }
}