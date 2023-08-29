<?php

namespace Phillopp\LaravelBanking\Iban;

use Iban\Validation\Iban as IbanObject;

class Service
{
    const FORMAT_PRINT = IbanObject::FORMAT_PRINT;
    const FORMAT_ELECTRONIC = IbanObject::FORMAT_ELECTRONIC;

    public function format(string $ibanString, string $format = self::FORMAT_PRINT): string
    {
        $iban = new IbanObject($ibanString);
        return $iban->format($format);
    }
}