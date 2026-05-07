<?php

require_once __DIR__ . '/ObserverInterface.php';

/**
 * Class ChatMember
 * Concrete Observer for Chat members.
 */
class ChatMember implements ObserverInterface
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(string $message): void
    {
        echo "ChatMember ({$this->name}): Received broadcast - \"{$message}\"" . PHP_EOL;
    }
}
