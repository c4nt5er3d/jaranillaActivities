<?php

/**
 * Class SpamHandler
 * Abstract class for the Spam Filter Chain of Responsibility.
 */
abstract class SpamHandler
{
    /**
     * @var SpamHandler|null The next handler in the chain.
     */
    protected ?SpamHandler $next_handler = null;

    /**
     * Set the next handler in the chain.
     *
     * @param SpamHandler $handler
     * @return SpamHandler
     */
    public function setNext(SpamHandler $handler): SpamHandler
    {
        $this->next_handler = $handler;
        return $handler;
    }

    /**
     * Handle the email request.
     *
     * @param string $emailContent
     * @return void
     */
    public function handle(string $emailContent): void
    {
        if ($this->next_handler !== null) {
            $this->next_handler->handle($emailContent);
            return;
        }

        echo "Email passed all filters: {$emailContent}" . PHP_EOL;
    }
}
