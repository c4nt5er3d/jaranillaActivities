<?php

/**
 * ProcessingHandler
 * Handles the 'Processing' stage of an order.
 */
class ProcessingHandler extends OrderStatusHandler
{
    public function handle(string $current_status): void
    {
        if (strtolower($current_status) === 'ordered') {
            echo "Processing Handler: Order is now being processed." . PHP_EOL;
        } elseif ($this->next_handler !== null) {
            $this->next_handler->handle($current_status);
        } else {
            echo "No handler could process the order status: {$current_status}" . PHP_EOL;
        }
    }
}
