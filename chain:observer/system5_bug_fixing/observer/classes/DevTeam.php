<?php

/**
 * DevTeam
 * Observer that receives bug tracker updates.
 */
class DevTeam implements ObserverInterface
{
    public function update(string $message): void
    {
        echo "Dev Team: Received update - {$message}" . PHP_EOL;
    }
}
