<?php

/**
 * Abstract LeaveHandler
 * Base class for all leave approval handlers in the hierarchy.
 */
abstract class LeaveHandler
{
    protected ?LeaveHandler $next_handler = null;

    /**
     * Set the next handler in the chain.
     */
    public function setNext(LeaveHandler $handler): LeaveHandler
    {
        $this->next_handler = $handler;
        return $handler;
    }

    /**
     * Handle the leave request.
     */
    abstract public function handle(int $days): void;
}
