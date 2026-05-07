<?php

require_once __DIR__ . '/ObserverInterface.php';

/**
 * Class CustomerNotification
 * Concrete Observer for Customer Notification.
 */
class CustomerNotification implements ObserverInterface
{
    public function update(string $message): void
    {
        echo "Customer Notification: Sending promotional emails - {$message}" . PHP_EOL;
    }
}
