<?php

/**
 * Class BuffSystem
 * Subsystem component responsible for applying temporary buffs to a character.
 */
class BuffSystem {
    /**
     * Applies a speed boost percentage to the character.
     */
    public function applySpeedBoost(int $amount): void {
        echo "Applying Speed Boost: " . $amount . "%" . PHP_EOL;
    }
}
