<?php

require_once __DIR__ . '/ObserverInterface.php';

/**
 * ShippingSystem
 * 
 * Schedules the delivery.
 */
class ShippingSystem implements ObserverInterface
{
    public function update(string $orderId): void
    {
        echo "ShippingSystem: Scheduling pickup and delivery for Order {$orderId}." . PHP_EOL;
    }
}
