<?php

require_once __DIR__ . '/ObserverInterface.php';

/**
 * Class PhoneApp
 * Concrete Observer for PhoneApp.
 */
class PhoneApp implements ObserverInterface
{
    public function update(string $message): void
    {
        echo "Phone App: New weather notification received - {$message}" . PHP_EOL;
    }
}
