<?php

require_once __DIR__ . '/ObserverInterface.php';

/**
 * AdviserDashboard
 * 
 * Updates the adviser's dashboard with real-time attendance.
 */
class AdviserDashboard implements ObserverInterface
{
    public function update(string $studentName): void
    {
        echo "AdviserDashboard: Updating dashboard. {$studentName} is now marked present." . PHP_EOL;
    }
}
