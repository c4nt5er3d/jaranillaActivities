<?php

require_once 'SpamHandler.php';

/**
 * Class ManualHandler
 * Sends the email for manual review.
 */
class ManualHandler extends SpamHandler
{
    /**
     * Handle the email by marking it for manual review.
     *
     * @param string $emailContent
     * @return void
     */
    public function handle(string $emailContent): void
    {
        if (strlen($emailContent) > 200) {
            echo "ManualHandler: Email is too long, sent for manual review." . PHP_EOL;
            return;
        }

        parent::handle($emailContent);
    }
}
