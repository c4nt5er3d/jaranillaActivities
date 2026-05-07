<?php

require_once __DIR__ . '/OrderValidationHandler.php';

/**
 * LogisticsHandler
 * 
 * Checks if address is reachable.
 */
class LogisticsHandler extends OrderValidationHandler
{
    private array $blockedZipCodes = ['9999', '0000'];

    public function handle(array $order): bool
    {
        if (in_array($order['zipCode'], $this->blockedZipCodes)) {
            echo "Validation Failed: Shipping address zip code '{$order['zipCode']}' is unreachable." . PHP_EOL;
            return false;
        }

        echo "Validation Passed: Shipping address is reachable." . PHP_EOL;
        return parent::handle($order);
    }
}
