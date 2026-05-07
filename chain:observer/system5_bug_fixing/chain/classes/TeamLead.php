<?php

/**
 * TeamLead
 * Handles high-priority and critical bugs.
 */
class TeamLead extends BugHandler
{
    public function handle(string $priority): void
    {
        if (strtolower($priority) === 'high' || strtolower($priority) === 'critical') {
            echo "Team Lead: Fixing high-priority/critical bug." . PHP_EOL;
        } elseif ($this->next_handler !== null) {
            echo "Team Lead: Cannot handle {$priority} bug. Escalating..." . PHP_EOL;
            $this->next_handler->handle($priority);
        } else {
            echo "No handler could process the bug with priority: {$priority}" . PHP_EOL;
        }
    }
}
