<?php

/**
 * GradeHandler
 * 
 * Base class for grade submission workflow.
 */
abstract class GradeHandler
{
    protected ?GradeHandler $nextHandler = null;

    public function setNext(GradeHandler $handler): GradeHandler
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle(array $submission): bool
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($submission);
        }

        return true;
    }
}
