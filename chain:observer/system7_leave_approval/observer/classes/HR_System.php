<?php

/**
 * HR_System
 * Observer that receives leave approval updates.
 */
class HR_System implements ObserverInterface
{
    public function update(string $message): void
    {
        echo "HR System: Received notification - {$message}" . PHP_EOL;
    }
}
