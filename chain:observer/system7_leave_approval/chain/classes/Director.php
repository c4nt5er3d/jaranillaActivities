<?php

/**
 * Director
 * Approves leave requests more than 5 days.
 */
class Director extends LeaveHandler
{
    public function handle(int $days): void
    {
        if ($days > 5) {
            echo "Director: Approved {$days} days of leave." . PHP_EOL;
        } elseif ($this->next_handler !== null) {
            $this->next_handler->handle($days);
        } else {
            echo "No handler could approve the leave request for {$days} days." . PHP_EOL;
        }
    }
}
