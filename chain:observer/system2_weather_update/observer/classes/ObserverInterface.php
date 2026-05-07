<?php

/**
 * Interface ObserverInterface
 * Interface for the Observer in the Weather Update system.
 */
interface ObserverInterface
{
    /**
     * Update the observer with a new weather message.
     */
    public function update(string $message): void;
}
