<?php

/**
 * Interface ObserverInterface
 * Defines the contract for all observer classes.
 */
interface ObserverInterface
{
    /**
     * Called when the subject state changes.
     *
     * @param string $message
     */
    public function update(string $message): void;
}
