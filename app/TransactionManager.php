<?php namespace App;

class TransactionManager
{

    /**
     * @var TransactionHandlerInterface
     */
    private $handler;

    public function addHandler(TransactionHandlerInterface $handler): self
    {
        if(!$this->handler) {
            $this->handler = $handler;
        } else {
            $this->handler->setNext($handler);
        }

        return $this;
    }

    public function process(Transaction $transaction)
    {
        return !$this->handler ?: $this->handler->handle($transaction);
    }
}
