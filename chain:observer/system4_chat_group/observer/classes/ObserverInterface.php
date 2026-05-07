<?php

/**
 * Interface ObserverInterface
 * Interface for the Observer in the Chat system.
 */
interface ObserverInterface
{
    /**
     * Update the observer with a new broadcast message.
     */
    public function update(string $message): void;
}
