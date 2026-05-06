<?php

/**
 * Class StatusDecorator
 * Concrete Decorator that adds status functionality to the user profile.
 */
class StatusDecorator extends ProfileDecorator {
    private string $status;

    /**
     * Constructor to add a status to the decorated profile.
     */
    public function __construct(UserProfile $decoratedProfile, string $status) {
        parent::__construct($decoratedProfile);
        $this->status = $status;
    }

    /**
     * Returns the description with the added status.
     */
    public function getDescription(): string {
        return parent::getDescription() . ", Status: " . $this->status;
    }
}
