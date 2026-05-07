<?php

require_once __DIR__ . '/SubjectInterface.php';
require_once __DIR__ . '/ObserverInterface.php';

/**
 * Class EmailProcessor
 * Concrete Subject that notifies observers about new emails.
 */
class EmailProcessor implements SubjectInterface
{
    private array $observers = [];
    private string $currentEmail = '';

    public function attach(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(ObserverInterface $observer): void
    {
        $this->observers = array_filter($this->observers, fn($obs) => $obs !== $observer);
    }

    public function processEmail(string $emailContent): void
    {
        $this->currentEmail = $emailContent;
        echo "Processing email: {$emailContent}" . PHP_EOL;
        $this->notify();
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->currentEmail);
        }
    }
}
