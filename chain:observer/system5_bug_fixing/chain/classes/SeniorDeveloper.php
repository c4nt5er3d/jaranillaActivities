<?php

/**
 * SeniorDeveloper
 * Handles medium-priority bugs.
 */
class SeniorDeveloper extends BugHandler
{
    public function handle(string $priority): void
    {
        if (strtolower($priority) === 'medium') {
            echo "Senior Developer: Fixing medium-priority bug." . PHP_EOL;
        } elseif ($this->next_handler !== null) {
            echo "Senior Developer: Cannot handle {$priority} bug. Escalating..." . PHP_EOL;
            $this->next_handler->handle($priority);
        } else {
            echo "No handler could process the bug with priority: {$priority}" . PHP_EOL;
        }
    }
}
