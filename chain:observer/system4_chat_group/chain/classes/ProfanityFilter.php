<?php

require_once __DIR__ . '/MessageHandler.php';

/**
 * Class ProfanityFilter
 * Filters messages for bad words.
 */
class ProfanityFilter extends MessageHandler
{
    private array $badWords = ['badword', 'offensive', 'toxic'];

    public function handle(string $message): void
    {
        foreach ($this->badWords as $word) {
            if (stripos($message, $word) !== false) {
                echo "ProfanityFilter: Message blocked due to offensive content." . PHP_EOL;
                return;
            }
        }

        parent::handle($message);
    }
}
