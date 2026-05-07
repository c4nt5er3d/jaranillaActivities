<?php

require_once __DIR__ . '/ObserverInterface.php';

/**
 * ParentNotification
 * 
 * Sends a notification to the parent about the student's attendance.
 */
class ParentNotification implements ObserverInterface
{
    public function update(string $studentName): void
    {
        echo "ParentNotification: Sending SMS to parents of {$studentName}. Your child is in class." . PHP_EOL;
    }
}
