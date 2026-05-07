<?php

/**
 * QATeam
 * Observer that receives bug tracker updates.
 */
class QATeam implements ObserverInterface
{
    public function update(string $message): void
    {
        echo "QA Team: Received update - {$message}" . PHP_EOL;
    }
}
