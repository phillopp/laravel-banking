<?php

namespace Phillopp\LaravelBanking\Sepa;

/**
 * SEPA-Purpose Code
 * @see https://www.iso20022.org/catalogue-messages/additional-content-messages/external-code-sets
 */
abstract class PurposeCode
{
    private string $code;
    private string $description;

    public function getCode(): string
    {
        return $this->code;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}