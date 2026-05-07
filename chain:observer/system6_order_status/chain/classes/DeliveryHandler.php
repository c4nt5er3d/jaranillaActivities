<?php

/**
 * DeliveryHandler
 * Handles the 'Delivery' stage of an order.
 */
class DeliveryHandler extends OrderStatusHandler
{
    public function handle(string $current_status): void
    {
        if (strtolower($current_status) === 'shipped') {
            echo "Delivery Handler: Order is now out for delivery." . PHP_EOL;
        } elseif ($this->next_handler !== null) {
            $this->next_handler->handle($current_status);
        } else {
            echo "No handler could process the order status: {$current_status}" . PHP_EOL;
        }
    }
}
