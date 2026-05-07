<?php

require_once __DIR__ . '/ObserverInterface.php';

/**
 * Class AdminNotifier
 * Concrete Observer that notifies administrators.
 */
class AdminNotifier implements ObserverInterface
{
    public function update(string $message): void
    {
        echo "[Admin] Notification sent: New email received - '{$message}'" . PHP_EOL;
    }
}
