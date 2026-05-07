<?php

/**
 * ObserverInterface
 * Interface for all observers that wait for bug tracker updates.
 */
interface ObserverInterface
{
    public function update(string $message): void;
}
