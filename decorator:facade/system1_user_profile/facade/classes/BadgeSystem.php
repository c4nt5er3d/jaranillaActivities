<?php

/**
 * Class BadgeSystem
 * Part of the subsystem that handles badge-related functionality.
 */
class BadgeSystem {
    /**
     * Displays the user's badge.
     */
    public function displayBadge(string $badge): void {
        echo "Badge: " . $badge . PHP_EOL;
    }
}
