<?php

/**
 * Interface ObserverInterface
 * Interface for the Observer in the Discount system.
 */
interface ObserverInterface
{
    /**
     * Update the observer with a new discount value.
     */
    public function update(string $message): void;
}
