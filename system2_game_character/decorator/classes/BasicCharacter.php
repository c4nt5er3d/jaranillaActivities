<?php

/**
 * Class BasicCharacter
 * Concrete Component providing the fundamental character implementation.
 */
class BasicCharacter implements GameCharacter {
    /**
     * Returns the base description.
     */
    public function getStats(): string {
        return "Base Character";
    }

    /**
     * Returns the base power level.
     */
    public function getPower(): int {
        return 10;
    }
}
