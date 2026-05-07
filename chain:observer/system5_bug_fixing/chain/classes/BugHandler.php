<?php

/**
 * Abstract BugHandler
 * Base class for all bug handlers in the escalation chain.
 */
abstract class BugHandler
{
    protected ?BugHandler $next_handler = null;

    /**
     * Set the next handler in the chain.
     */
    public function setNext(BugHandler $handler): BugHandler
    {
        $this->next_handler = $handler;
        return $handler;
    }

    /**
     * Handle the bug report escalation.
     */
    abstract public function handle(string $priority): void;
}
