<?php

require_once __DIR__ . '/ObserverInterface.php';

/**
 * Class UserInbox
 * Concrete Observer that represents the user's inbox.
 */
class UserInbox implements ObserverInterface
{
    public function update(string $message): void
    {
        echo "[Inbox] New email added to inbox: {$message}" . PHP_EOL;
    }
}
