<?php

/**
 * JuniorDeveloper
 * Handles low-priority bugs.
 */
class JuniorDeveloper extends BugHandler
{
    public function handle(string $priority): void
    {
        if (strtolower($priority) === 'low') {
            echo "Junior Developer: Fixing low-priority bug." . PHP_EOL;
        } elseif ($this->next_handler !== null) {
            echo "Junior Developer: Cannot handle {$priority} bug. Escalating..." . PHP_EOL;
            $this->next_handler->handle($priority);
        } else {
            echo "No handler could process the bug with priority: {$priority}" . PHP_EOL;
        }
    }
}
