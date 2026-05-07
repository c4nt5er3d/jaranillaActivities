<?php

/**
 * Payroll_System
 * Observer that receives leave approval updates.
 */
class Payroll_System implements ObserverInterface
{
    public function update(string $message): void
    {
        echo "Payroll System: Received notification - {$message}" . PHP_EOL;
    }
}
