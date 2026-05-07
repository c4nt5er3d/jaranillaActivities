<?php

require_once __DIR__ . '/SubjectInterface.php';
require_once __DIR__ . '/ObserverInterface.php';

/**
 * Class ChatGroup
 * Concrete Subject that notifies chat members about broadcasts.
 */
class ChatGroup implements SubjectInterface
{
    private array $members = [];
    private string $lastMessage = "";

    public function attach(ObserverInterface $member): void
    {
        $this->members[] = $member;
    }

    public function detach(ObserverInterface $member): void
    {
        $this->members = array_filter($this->members, fn($m) => $m !== $member);
    }

    public function notify(): void
    {
        foreach ($this->members as $member) {
            $member->update($this->lastMessage);
        }
    }

    public function broadcast(string $message): void
    {
        $this->lastMessage = $message;
        $this->notify();
    }
}
