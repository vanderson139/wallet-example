<?php namespace App;

class PayerHasBalanceHandler extends AbstractTransactionHandler
{
    public function handle(Transaction $transaction):? TransactionHandlerInterface
    {
        if($transaction->getPayee()->getBalance() < $transaction->getAmount()) {
            throw new \Exception('Not Enough balance');
        }

        return parent::handle($transaction);
    }
}
