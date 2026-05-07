<?php

/**
 * OrderValidationHandler
 * 
 * Base class for order validation chain.
 */
abstract class OrderValidationHandler
{
    protected ?OrderValidationHandler $nextHandler = null;

    public function setNext(OrderValidationHandler $handler): OrderValidationHandler
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle(array $order): bool
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($order);
        }

        return true;
    }
}
