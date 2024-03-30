<?php

namespace Phillopp\LaravelBanking\Models;

use Illuminate\Support\Str;
use Phillopp\LaravelBanking\Exception\PurposeCodeNotFound;
use Phillopp\LaravelBanking\Exception\TransferException;
use Phillopp\LaravelBanking\Sepa\PurposeCode;
use Phillopp\LaravelBanking\Transfer\Service;

class Transfer
{
    private Bankaccount $recipient;
    private float $amount;
    private string $purpose;
    private string $reference;
    private Bankaccount $sender;
    private PurposeCode $purposeCode;

    public function __construct(
        Bankaccount $recipient,
        float       $amount,
        string      $purpose = null,
        string      $reference = null,
        Bankaccount $sender = null,
        PurposeCode $purposeCode = null
    )
    {
        if (!empty($reference) && !empty($purpose)) {
            throw new TransferException('Cannot use reference and purpose. Only one allowed.');
        }

        $this->recipient = $recipient;
        $this->amount = $amount;
        $this->reference = $reference;
        $this->purpose = $purpose;
        $this->sender = $sender;
        $this->purposeCode = $purposeCode;
    }

    public function getRecipient(): Bankaccount
    {
        return $this->recipient;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getPurpose(): string
    {
        return $this->purpose;
    }

    public function getReference(): string
    {
        return $this->reference;
    }

    public function getSender(): Bankaccount
    {
        return $this->sender;
    }

    public function getPurposeCode(): PurposeCode
    {
        return $this->purposeCode;
    }

    public function getEpcData(
        string $userHint = ''
    ): string
    {
        $epcDefault = "BCD\n002\n1\nSCT\n%s\n%s\n%s\nEUR%s\n%s\n%s\n%s\n%s";

        $purposeCode = '';
        if (!empty($this->getPurposeCode())) {
            $purposeCode = $this->getPurposeCode()->getCode();
        }

        return sprintf(
            $epcDefault,
            $this->getRecipient()->getBic(),
            Str::substr($this->getRecipient()->getAccountHolder(), 0, 70),
            $this->getRecipient()->getIban(),
            $this->getAmount(),
            $purposeCode,
            $this->getReference(),
            $this->getPurpose(),
            $userHint
        );
    }
}