<?php

/**
 * Manager
 * Approves leave requests up to 5 days.
 */
class Manager extends LeaveHandler
{
    public function handle(int $days): void
    {
        if ($days <= 5) {
            echo "Manager: Approved {$days} days of leave." . PHP_EOL;
        } elseif ($this->next_handler !== null) {
            echo "Manager: Cannot approve {$days} days. Escalating to Director..." . PHP_EOL;
            $this->next_handler->handle($days);
        } else {
            echo "No handler could approve the leave request for {$days} days." . PHP_EOL;
        }
    }
}
