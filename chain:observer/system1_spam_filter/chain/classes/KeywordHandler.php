<?php

require_once 'SpamHandler.php';

/**
 * Class KeywordHandler
 * Checks for spam keywords in the email.
 */
class KeywordHandler extends SpamHandler
{
    /**
     * @var array List of spam keywords.
     */
    private array $spamKeywords = ['buy now', 'free money', 'winner', 'luxury'];

    /**
     * Handle the email by checking for keywords.
     *
     * @param string $emailContent
     * @return void
     */
    public function handle(string $emailContent): void
    {
        foreach ($this->spamKeywords as $keyword) {
            if (stripos($emailContent, $keyword) !== false) {
                echo "KeywordHandler: Flagged as spam due to keyword '{$keyword}'." . PHP_EOL;
                return;
            }
        }

        parent::handle($emailContent);
    }
}
