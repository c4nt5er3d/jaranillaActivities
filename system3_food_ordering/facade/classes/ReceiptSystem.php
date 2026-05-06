<?php

/**
 * Class ReceiptSystem
 * Subsystem component responsible for printing the final receipt.
 */
class ReceiptSystem {
    /**
     * Prints a formatted receipt for the ordered item and price.
     */
    public function printReceipt(string $item, float $price): void {
        echo "--- Receipt ---" . PHP_EOL;
        echo "Item: " . $item . PHP_EOL;
        echo "Price: $" . $price . PHP_EOL;
        echo "---------------" . PHP_EOL;
    }
}
