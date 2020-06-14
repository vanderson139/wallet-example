<?php namespace App;

class Wallet
{
    private $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }

    public function addBalance(float $amount)
    {
        $this->balance += $amount;
    }

    public function subBalance(float $amount)
    {
        $this->balance -= $amount;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}
