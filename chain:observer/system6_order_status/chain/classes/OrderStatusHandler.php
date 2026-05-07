<?php

/**
 * Abstract OrderStatusHandler
 * Base class for all order status handlers in the processing chain.
 */
abstract class OrderStatusHandler
{
    protected ?OrderStatusHandler $next_handler = null;

    /**
     * Set the next handler in the chain.
     */
    public function setNext(OrderStatusHandler $handler): OrderStatusHandler
    {
        $this->next_handler = $handler;
        return $handler;
    }

    /**
     * Handle the order status transition.
     */
    abstract public function handle(string $current_status): void;
}
