<?php

/**
 * Class UsernameSystem
 * Part of the subsystem that handles username-related functionality.
 */
class UsernameSystem {
    /**
     * Displays the user's username.
     */
    public function displayUsername(string $username): void {
        echo "Username: " . $username . PHP_EOL;
    }
}
