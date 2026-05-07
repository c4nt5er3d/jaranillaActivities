<?php

/**
 * ObserverInterface
 * 
 * Interface for order validation observers.
 */
interface ObserverInterface
{
    public function update(string $orderId): void;
}
