<?php namespace Tests;

use App\Transaction;
use App\Handlers\TransactionHandler;
use App\Handlers\PayerHasBalanceHandler;
use App\TransactionManager;
use App\Wallet;
use PHPUnit\Framework\TestCase;

class TransactionTest extends TestCase
{
    public function testShouldMakeATransactionBetweenTwoWallets()
    {

        $payer = new Wallet(100);
        $payee = new Wallet(30);

        $transaction = new Transaction($payer, $payee, 20);

        $hasBalance = new PayerHasBalanceHandler();
        $transactionHandler = new TransactionHandler();

        (new TransactionManager())
            ->addHandler($hasBalance)
            ->addHandler($transactionHandler)
            ->process($transaction);

        $this->assertEquals(50, $payee->getBalance());
        $this->assertEquals(80, $payer->getBalance());
    }
}
