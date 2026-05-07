<?php

/**
 * ShippingHandler
 * Handles the 'Shipping' stage of an order.
 */
class ShippingHandler extends OrderStatusHandler
{
    public function handle(string $current_status): void
    {
        if (strtolower($current_status) === 'processed') {
            echo "Shipping Handler: Order is now being shipped." . PHP_EOL;
        } elseif ($this->next_handler !== null) {
            $this->next_handler->handle($current_status);
        } else {
            echo "No handler could process the order status: {$current_status}" . PHP_EOL;
        }
    }
}
