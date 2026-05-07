<?php

require_once __DIR__ . '/SubjectInterface.php';
require_once __DIR__ . '/ObserverInterface.php';

/**
 * AttendanceSystem
 * 
 * The Subject that notifies observers when attendance is marked.
 */
class AttendanceSystem implements SubjectInterface
{
    private array $observers = [];
    private string $lastStudentMarked = '';

    public function attach(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(ObserverInterface $observer): void
    {
        $this->observers = array_filter($this->observers, function ($obs) use ($observer) {
            return $obs !== $observer;
        });
    }

    public function markAttendance(string $studentName): void
    {
        echo "AttendanceSystem: Marking attendance for {$studentName}..." . PHP_EOL;
        $this->lastStudentMarked = $studentName;
        $this->notify();
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->lastStudentMarked);
        }
    }
}
