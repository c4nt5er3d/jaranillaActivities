<?php

/**
 * Customer
 * Observer that receives order status updates.
 */
class Customer implements ObserverInterface
{
    public function update(string $message): void
    {
        echo "Customer: Received notification - {$message}" . PHP_EOL;
    }
}
