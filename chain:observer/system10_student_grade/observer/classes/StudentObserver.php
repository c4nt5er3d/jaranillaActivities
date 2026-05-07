<?php

require_once __DIR__ . '/ObserverInterface.php';

/**
 * StudentObserver
 * 
 * Notifies the student about their new grade.
 */
class StudentObserver implements ObserverInterface
{
    public function update(array $gradeData): void
    {
        echo "StudentObserver: Hello Student {$gradeData['studentId']}, your grade in {$gradeData['subject']} is {$gradeData['grade']}." . PHP_EOL;
    }
}
