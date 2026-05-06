<?php

/**
 * Class StatSystem
 * Subsystem component responsible for managing character statistics.
 */
class StatSystem {
    /**
     * Sets the health and mana stats for a character.
     */
    public function setStats(int $health, int $mana): void {
        echo "Setting Health: " . $health . ", Mana: " . $mana . PHP_EOL;
    }
}
