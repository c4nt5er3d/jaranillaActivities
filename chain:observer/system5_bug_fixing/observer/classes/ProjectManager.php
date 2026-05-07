<?php

/**
 * ProjectManager
 * Observer that receives bug tracker updates.
 */
class ProjectManager implements ObserverInterface
{
    public function update(string $message): void
    {
        echo "Project Manager: Received update - {$message}" . PHP_EOL;
    }
}
