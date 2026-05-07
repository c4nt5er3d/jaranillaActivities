<?php

/**
 * LeaveSystem
 * The Subject that notifies observers when a leave request is approved.
 */
class LeaveSystem implements SubjectInterface
{
    private array $observers = [];

    public function attach(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(ObserverInterface $observer): void
    {
        $this->observers = array_filter($this->observers, fn($o) => $o !== $observer);
    }

    public function notify(string $message): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($message);
        }
    }

    /**
     * Approve leave and notify observers.
     */
    public function approveLeave(string $employee_name, int $days): void
    {
        $message = "Leave approved for {$employee_name} for {$days} days.";
        echo "Leave System: Approving leave for {$employee_name}..." . PHP_EOL;
        $this->notify($message);
    }
}
