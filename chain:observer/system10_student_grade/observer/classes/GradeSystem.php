<?php

require_once __DIR__ . '/SubjectInterface.php';
require_once __DIR__ . '/ObserverInterface.php';

/**
 * GradeSystem
 * 
 * The Subject that notifies stakeholders when a new grade is posted.
 */
class GradeSystem implements SubjectInterface
{
    private array $observers = [];
    private array $lastPostedGrade = [];

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

    public function postGrade(string $studentId, string $subject, int $grade): void
    {
        echo "GradeSystem: Posting grade for Student {$studentId} in {$subject}..." . PHP_EOL;
        $this->lastPostedGrade = [
            'studentId' => $studentId,
            'subject' => $subject,
            'grade' => $grade
        ];
        $this->notify();
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->lastPostedGrade);
        }
    }
}
