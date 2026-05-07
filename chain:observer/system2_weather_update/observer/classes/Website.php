<?php

require_once __DIR__ . '/ObserverInterface.php';

/**
 * Class Website
 * Concrete Observer for Website.
 */
class Website implements ObserverInterface
{
    public function update(string $message): void
    {
        echo "Website: Displaying latest weather update - {$message}" . PHP_EOL;
    }
}
