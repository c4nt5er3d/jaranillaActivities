<?php

require_once __DIR__ . '/OrderValidationHandler.php';

/**
 * StockHandler
 * 
 * Checks if items are in stock.
 */
class StockHandler extends OrderValidationHandler
{
    private array $stock = [
        'item1' => 10,
        'item2' => 0,
        'item3' => 5
    ];

    public function handle(array $order): bool
    {
        foreach ($order['items'] as $item => $quantity) {
            if (!isset($this->stock[$item]) || $this->stock[$item] < $quantity) {
                echo "Validation Failed: Item '{$item}' is out of stock or insufficient quantity." . PHP_EOL;
                return false;
            }
        }

        echo "Validation Passed: All items are in stock." . PHP_EOL;
        return parent::handle($order);
    }
}
