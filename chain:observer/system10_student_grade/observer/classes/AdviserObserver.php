<?php

require_once __DIR__ . '/ObserverInterface.php';

/**
 * AdviserObserver
 * 
 * Notifies the adviser about the student's grade for academic tracking.
 */
class AdviserObserver implements ObserverInterface
{
    public function update(array $gradeData): void
    {
        echo "AdviserObserver: Updating adviser records for Student {$gradeData['studentId']}. New grade in {$gradeData['subject']}: {$gradeData['grade']}." . PHP_EOL;
    }
}
