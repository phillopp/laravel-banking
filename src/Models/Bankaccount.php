<?php

namespace Phillopp\LaravelBanking\Models;
use Iban\Validation\Iban;
use Illuminate\Support\Str;

class Bankaccount
{
    private Iban $iban;
    private string $bic;
    private string $accountholder;
    private string $bankname;

    public function __construct(
        string $iban,
        string $bic,
        string $accountholder,
        string $bankname = ''
    )
    {
        $this->iban = new Iban($iban);
        $this->bic = $bic;
        $this->accountholder = $accountholder;
        $this->bankname = $bankname;
    }

    public function getIban(): Iban
    {
        return $this->iban;
    }

    public function getBic(): string
    {
        return $this->bic;
    }

    public function getAccountHolder(): string
    {
        return $this->accountholder;
    }

    public function getBankName(): string
    {
        return $this->bankname;
    }

    public function getEpcData(
        float $amount,
        string $reference = '',
        string $purpose = '',
        string $userHint = ''
    ): string
    {
        $beneficiary = Str::substr($this->getAccountHolder(), 0, 70);
        $iban = $this->getIban()->getNormalizedIban();
        $purpose = Str::substr($purpose, 0, 140);

        $epcDefault = "BCD\n002\n1\nSCT\n%s\n%s\n%s\nEUR%s\n\n%s\n%s\n%s";
        $epcString = sprintf($epcDefault, $this->getBic(), $beneficiary, $iban, $amount, $reference, $purpose, $userHint);
        return $epcString;
    }
}