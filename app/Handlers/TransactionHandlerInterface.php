<?php namespace App\Handlers;

use App\Transaction;

interface TransactionHandlerInterface
{
    public function setNext(TransactionHandlerInterface $handler):? TransactionHandlerInterface;

    public function handle(Transaction $transaction):? TransactionHandlerInterface;
}
