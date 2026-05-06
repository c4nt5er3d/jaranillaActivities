<?php

/**
 * Class SpeedBoostDecorator
 * Concrete Decorator that adds speed boost functionality to the character.
 */
class SpeedBoostDecorator extends CharacterDecorator {
    /**
     * Constructor to initialize the decorator.
     */
    public function __construct(GameCharacter $decoratedCharacter) {
        parent::__construct($decoratedCharacter);
    }

    /**
     * Appends speed boost info to stats.
     */
    public function getStats(): string {
        return parent::getStats() . " + Speed Boost";
    }

    /**
     * Increases the power level with speed boost.
     */
    public function getPower(): int {
        return parent::getPower() + 2;
    }
}
