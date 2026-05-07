<?php

/**
 * Class StatusSystem
 * Part of the subsystem that handles status-related functionality.
 */
class StatusSystem {
    /**
     * Displays the user's online status.
     */
    public function displayStatus(bool $isOnline): void {
        echo "Status: " . ($isOnline ? "Online" : "Offline") . PHP_EOL;
    }
}
