<?php

namespace Unit;

use Phillopp\LaravelBanking\Models\Bankaccount;
use Phillopp\LaravelBanking\Models\Transfer;
use PHPUnit\Framework\TestCase;

class TransferTest extends TestCase
{
    private Transfer $transfer;
    private Bankaccount $account;
    private function transfer(): Transfer
    {
        if (empty($this->transfer)) {
            $this->transfer = new Transfer(
                $this->account(),
                12.0,
                'Meine Rechnung'
            );
        }

        return $this->transfer;
    }
    private function account(): Bankaccount
    {
        if (empty($this->account)) {
            $this->account = new Bankaccount(
                'DE02120300000000202051',
                'BYLADEM1001',
                'Max Mustermann'
            );
        }

        return $this->account;
    }

    private function epcData():string
    {
        return sprintf(
            "BCD\n002\n1\nSCT\n%s\n%s\n%s\nEUR%s\n%s\n%s\n%s\n%s",
            $this->account()->getBic(),
            $this->account()->getAccountHolder(),
            $this->account()->getIban()->getNormalizedIban(),
            $this->transfer()->getAmount(),
            '',
            '',
            $this->transfer()->getPurpose(),
            ''
        );
    }

    public function testEpc() {
        $transfer = $this->transfer();
        $this->assertEquals($this->epcData(), $transfer->getEpcData());
    }
}