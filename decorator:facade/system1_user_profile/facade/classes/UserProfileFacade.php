<?php

/**
 * Class UserProfileFacade
 * Unifies and simplifies the underlying subsystem components (Username, Badge, Status).
 */
class UserProfileFacade {
    private UsernameSystem $usernameSystem;
    private BadgeSystem $badgeSystem;
    private StatusSystem $statusSystem;

    /**
     * Initializes the subsystem components.
     */
    public function __construct() {
        $this->usernameSystem = new UsernameSystem();
        $this->badgeSystem = new BadgeSystem();
        $this->statusSystem = new StatusSystem();
    }

    /**
     * Provides a simple interface to display the full user profile.
     */
    public function displayFullProfile(string $username, string $badge, bool $isOnline): void {
        echo "--- User Profile ---" . PHP_EOL;
        $this->usernameSystem->displayUsername($username);
        $this->badgeSystem->displayBadge($badge);
        $this->statusSystem->displayStatus($isOnline);
        echo "--------------------" . PHP_EOL;
    }
}
