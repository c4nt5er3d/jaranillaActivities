<?php

require_once 'SpamHandler.php';

/**
 * Class ReputationHandler
 * Checks the sender's reputation.
 */
class ReputationHandler extends SpamHandler
{
    /**
     * @var array Simulating a list of blacklisted senders.
     */
    private array $blacklist = ['scammer@badsite.com', 'phisher@evil.org'];

    /**
     * Handle the email by checking sender reputation.
     *
     * @param string $emailContent In this case, we use it to check the sender if it matches our simulated blacklist.
     * @return void
     */
    public function handle(string $emailContent): void
    {
        // Simple simulation: if the content contains a blacklisted email address.
        foreach ($this->blacklist as $badEmail) {
            if (stripos($emailContent, $badEmail) !== false) {
                echo "ReputationHandler: Flagged as spam due to bad reputation: '{$badEmail}'." . PHP_EOL;
                return;
            }
        }

        parent::handle($emailContent);
    }
}
