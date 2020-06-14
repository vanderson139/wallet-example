<?php namespace App;

class TransactionHandler extends AbstractTransactionHandler
{
    public function handle(Transaction $transaction):? TransactionHandlerInterface
    {
        $amount = $transaction->getAmount();
        $transaction->getPayer()->subBalance($amount);
        $transaction->getPayee()->addBalance($amount);

        return parent::handle($transaction);
    }
}
