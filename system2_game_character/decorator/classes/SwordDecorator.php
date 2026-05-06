<?php

/**
 * Class SwordDecorator
 * Concrete Decorator that adds a sword to the character.
 */
class SwordDecorator extends CharacterDecorator {
    /**
     * Constructor to initialize the decorator.
     */
    public function __construct(GameCharacter $decoratedCharacter) {
        parent::__construct($decoratedCharacter);
    }

    /**
     * Appends sword info to stats.
     */
    public function getStats(): string {
        return parent::getStats() . " + Steel Sword";
    }

    /**
     * Increases power level with sword damage.
     */
    public function getPower(): int {
        return parent::getPower() + 15;
    }
}
