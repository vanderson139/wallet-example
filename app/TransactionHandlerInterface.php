<?php namespace App;

interface TransactionHandlerInterface
{
    public function setNext(TransactionHandlerInterface $handler):? TransactionHandlerInterface;

    public function handle(Transaction $transaction):? TransactionHandlerInterface;
}
