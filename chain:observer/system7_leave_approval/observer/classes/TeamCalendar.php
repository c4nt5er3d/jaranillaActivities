<?php

/**
 * TeamCalendar
 * Observer that receives leave approval updates.
 */
class TeamCalendar implements ObserverInterface
{
    public function update(string $message): void
    {
        echo "Team Calendar: Received notification - {$message}" . PHP_EOL;
    }
}
