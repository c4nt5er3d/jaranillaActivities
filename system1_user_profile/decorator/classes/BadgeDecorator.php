<?php

/**
 * Class BadgeDecorator
 * Concrete Decorator that adds badge functionality to the user profile.
 */
class BadgeDecorator extends ProfileDecorator {
    private string $badge;

    /**
     * Constructor to add a badge to the decorated profile.
     */
    public function __construct(UserProfile $decoratedProfile, string $badge) {
        parent::__construct($decoratedProfile);
        $this->badge = $badge;
    }

    /**
     * Returns the description with the added badge.
     */
    public function getDescription(): string {
        return parent::getDescription() . ", Badge: " . $this->badge;
    }
}
