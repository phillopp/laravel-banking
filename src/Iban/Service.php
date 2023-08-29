<?php

namespace Phillopp\LaravelBanking\Iban;

use Iban\Validation\Iban as IbanObject;

class Service
{
    public function format(string $ibanString, string $format = IbanObject::FORMAT_PRINT): string
    {
        $iban = new IbanObject($ibanString);
        return $iban->format($format);
    }
}