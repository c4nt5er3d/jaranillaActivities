<?php

require_once __DIR__ . '/ObserverInterface.php';

/**
 * StudentRecord
 * 
 * Updates the student's official attendance record.
 */
class StudentRecord implements ObserverInterface
{
    public function update(string $studentName): void
    {
        echo "StudentRecord: Updating record for {$studentName}. Status: Present." . PHP_EOL;
    }
}
