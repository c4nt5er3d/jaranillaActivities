<?php

/**
 * ObserverInterface
 * Interface for all observers that wait for order status updates.
 */
interface ObserverInterface
{
    public function update(string $message): void;
}
