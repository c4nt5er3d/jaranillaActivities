<?php

/**
 * AttendanceHandler
 * 
 * This is the base class for the attendance validation chain.
 */
abstract class AttendanceHandler
{
    protected ?AttendanceHandler $nextHandler = null;

    /**
     * Set the next handler in the chain.
     */
    public function setNext(AttendanceHandler $handler): AttendanceHandler
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    /**
     * Handle the attendance request.
     */
    public function handle(array $request): bool
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }

        return true;
    }
}
