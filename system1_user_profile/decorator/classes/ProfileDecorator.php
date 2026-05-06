<?php

/**
 * Abstract class ProfileDecorator
 * Acts as the base Decorator in the Decorator pattern.
 */
abstract class ProfileDecorator implements UserProfile {
    protected UserProfile $decoratedProfile;

    /**
     * Constructor to wrap a UserProfile component.
     */
    public function __construct(UserProfile $decoratedProfile) {
        $this->decoratedProfile = $decoratedProfile;
    }

    /**
     * Delegates the description call to the decorated object.
     */
    public function getDescription(): string {
        return $this->decoratedProfile->getDescription();
    }
}
