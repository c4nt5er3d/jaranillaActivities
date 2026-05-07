<?php

require_once __DIR__ . '/ObserverInterface.php';

/**
 * Class DisplayBoard
 * Concrete Observer for DisplayBoard.
 */
class DisplayBoard implements ObserverInterface
{
    public function update(string $message): void
    {
        echo "Display Board: Scrolling weather alert - {$message}" . PHP_EOL;
    }
}
