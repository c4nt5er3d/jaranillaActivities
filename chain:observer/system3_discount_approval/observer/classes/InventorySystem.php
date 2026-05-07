<?php

require_once __DIR__ . '/ObserverInterface.php';

/**
 * Class InventorySystem
 * Concrete Observer for Inventory System.
 */
class InventorySystem implements ObserverInterface
{
    public function update(string $message): void
    {
        echo "Inventory System: Adjusting prices in the catalog - {$message}" . PHP_EOL;
    }
}
