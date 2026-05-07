<?php

/**
 * Supervisor
 * Approves leave requests up to 2 days.
 */
class Supervisor extends LeaveHandler
{
    public function handle(int $days): void
    {
        if ($days <= 2) {
            echo "Supervisor: Approved {$days} days of leave." . PHP_EOL;
        } elseif ($this->next_handler !== null) {
            echo "Supervisor: Cannot approve {$days} days. Escalating to Manager..." . PHP_EOL;
            $this->next_handler->handle($days);
        } else {
            echo "No handler could approve the leave request for {$days} days." . PHP_EOL;
        }
    }
}
