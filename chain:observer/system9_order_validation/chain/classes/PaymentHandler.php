<?php

require_once __DIR__ . '/OrderValidationHandler.php';

/**
 * PaymentHandler
 * 
 * Checks if funds are available.
 */
class PaymentHandler extends OrderValidationHandler
{
    public function handle(array $order): bool
    {
        if ($order['balance'] < $order['total']) {
            echo "Validation Failed: Insufficient funds. Total: {$order['total']}, Balance: {$order['balance']}." . PHP_EOL;
            return false;
        }

        echo "Validation Passed: Payment funds verified." . PHP_EOL;
        return parent::handle($order);
    }
}
