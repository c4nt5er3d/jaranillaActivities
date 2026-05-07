<?php

require_once __DIR__ . '/ObserverInterface.php';

/**
 * Class SpamLogger
 * Concrete Observer that logs email processing.
 */
class SpamLogger implements ObserverInterface
{
    public function update(string $message): void
    {
        echo "[Logger] Logged email processing: {$message}" . PHP_EOL;
    }
}
