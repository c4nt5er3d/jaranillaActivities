<?php

/**
 * ObserverInterface
 * 
 * Interface for all observers in the system.
 */
interface ObserverInterface
{
    public function update(string $studentName): void;
}
