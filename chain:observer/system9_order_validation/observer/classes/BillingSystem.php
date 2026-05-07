<?php

require_once __DIR__ . '/ObserverInterface.php';

/**
 * BillingSystem
 * 
 * Processes the payment and generates invoice.
 */
class BillingSystem implements ObserverInterface
{
    public function update(string $orderId): void
    {
        echo "BillingSystem: Charging payment and generating invoice for Order {$orderId}." . PHP_EOL;
    }
}
