<?php

/**
 * Class BasicUserProfile
 * Concrete Component that provides the basic user profile implementation.
 */
class BasicUserProfile implements UserProfile {
    private string $username;

    /**
     * Constructor to initialize the basic profile with a username.
     */
    public function __construct(string $username) {
        $this->username = $username;
    }

    /**
     * Returns the basic description containing the username.
     */
    public function getDescription(): string {
        return "Username: " . $this->username;
    }
}
