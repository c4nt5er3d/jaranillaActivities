<?php

/**
 * ObserverInterface
 * 
 * Interface for grade system observers.
 */
interface ObserverInterface
{
    public function update(array $gradeData): void;
}
