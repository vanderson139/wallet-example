<?php namespace App\Handlers;

use App\Transaction;

abstract class AbstractTransactionHandler implements TransactionHandlerInterface
{
    private $nextHandler;

    public function setNext(TransactionHandlerInterface $handler):? TransactionHandlerInterface
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle(Transaction $transaction):? TransactionHandlerInterface
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($transaction);
        }

        return null;
    }
}