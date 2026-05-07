<?php

/**
 * InventorySystem
 * Observer that receives order status updates.
 */
class InventorySystem implements ObserverInterface
{
    public function update(string $message): void
    {
        echo "Inventory System: Received notification - {$message}" . PHP_EOL;
    }
}
