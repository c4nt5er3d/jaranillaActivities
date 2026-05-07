<?php

/**
 * Abstract class CharacterDecorator
 * Base decorator class that maintains a reference to a GameCharacter.
 */
abstract class CharacterDecorator implements GameCharacter {
    protected GameCharacter $decoratedCharacter;

    /**
     * Constructor to wrap an existing GameCharacter.
     */
    public function __construct(GameCharacter $decoratedCharacter) {
        $this->decoratedCharacter = $decoratedCharacter;
    }

    /**
     * Delegates stat retrieval to the wrapped character.
     */
    public function getStats(): string {
        return $this->decoratedCharacter->getStats();
    }

    /**
     * Delegates power level retrieval to the wrapped character.
     */
    public function getPower(): int {
        return $this->decoratedCharacter->getPower();
    }
}
