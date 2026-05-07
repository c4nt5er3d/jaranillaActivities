<?php

require_once __DIR__ . '/ObserverInterface.php';

/**
 * WarehouseSystem
 * 
 * Prepares the items for shipping.
 */
class WarehouseSystem implements ObserverInterface
{
    public function update(string $orderId): void
    {
        echo "WarehouseSystem: Reserving items for Order {$orderId} and preparing for packing." . PHP_EOL;
    }
}
