<?php

/**
 * BugTracker
 * The Subject that notifies observers when a bug report is updated.
 */
class BugTracker implements SubjectInterface
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
     * Update bug report and notify observers.
     */
    public function updateBugReport(string $bug_id, string $status): void
    {
        $message = "Bug Report [{$bug_id}] status updated to: {$status}";
        echo "BugTracker: Updating bug report {$bug_id}..." . PHP_EOL;
        $this->notify($message);
    }
}
