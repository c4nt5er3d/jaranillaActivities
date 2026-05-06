<?php

/**
 * Class ArmorDecorator
 * Concrete Decorator that adds armor to the character.
 */
class ArmorDecorator extends CharacterDecorator {
    /**
     * Constructor to initialize the decorator.
     */
    public function __construct(GameCharacter $decoratedCharacter) {
        parent::__construct($decoratedCharacter);
    }

    /**
     * Appends armor info to stats.
     */
    public function getStats(): string {
        return parent::getStats() . " + Iron Armor";
    }

    /**
     * Increases power level with armor protection.
     */
    public function getPower(): int {
        return parent::getPower() + 5;
    }
}
