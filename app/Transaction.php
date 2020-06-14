<?php namespace App;

class Transaction
{
    /**
     * @var Wallet
     */
    private $payer;
    /**
     * @var Wallet
     */
    private $payee;

    private $amount;

    public function __construct(Wallet $payer, Wallet $payee, float $amount)
    {

        $this->payer = $payer;
        $this->payee = $payee;
        $this->amount = $amount;
    }

    public function getPayer(): Wallet
    {
        return $this->payer;
    }

    public function getPayee(): Wallet
    {
        return $this->payee;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

}
