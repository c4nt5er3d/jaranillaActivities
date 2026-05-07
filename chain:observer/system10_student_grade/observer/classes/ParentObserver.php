<?php

require_once __DIR__ . '/ObserverInterface.php';

/**
 * ParentObserver
 * 
 * Notifies the parent about the student's new grade.
 */
class ParentObserver implements ObserverInterface
{
    public function update(array $gradeData): void
    {
        echo "ParentObserver: Notification to Parent: Student {$gradeData['studentId']} received a grade of {$gradeData['grade']} in {$gradeData['subject']}." . PHP_EOL;
    }
}
