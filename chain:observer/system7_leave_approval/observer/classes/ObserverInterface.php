<?php

/**
 * ObserverInterface
 * Interface for all observers that wait for leave approval updates.
 */
interface ObserverInterface
{
    public function update(string $message): void;
}
