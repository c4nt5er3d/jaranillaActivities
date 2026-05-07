<?php

require_once __DIR__ . '/MessageHandler.php';

/**
 * Class SpamFilter
 * Checks for repetition or spam-like patterns.
 */
class SpamFilter extends MessageHandler
{
    private ?string $lastMessage = null;

    public function handle(string $message): void
    {
        if ($message === $this->lastMessage) {
            echo "SpamFilter: Message blocked (duplicate content detected)." . PHP_EOL;
            return;
        }

        $this->lastMessage = $message;
        parent::handle($message);
    }
}
