<?php

/**
 * Interface UserProfile
 * Acts as the base Component in the Decorator pattern.
 */
interface UserProfile {
    /**
     * Returns the description of the user profile.
     */
    public function getDescription(): string;
}
