<?php

/**
 * Interface GameCharacter
 * Acts as the base Component in the Decorator pattern.
 */
interface GameCharacter {
    /**
     * Returns the character's stats description.
     */
    public function getStats(): string;

    /**
     * Returns the character's total power level.
     */
    public function getPower(): int;
}
