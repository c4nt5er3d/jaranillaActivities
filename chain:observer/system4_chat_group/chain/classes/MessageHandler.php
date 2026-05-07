<?php

/**
 * Abstract class MessageHandler
 * Base handler for the Chat Message filtering system.
 */
abstract class MessageHandler
{
    /**
     * @var MessageHandler|null Next handler in the chain.
     */
    protected ?MessageHandler $nextHandler = null;

    /**
     * Set the next handler in the chain.
     */
    public function setNext(MessageHandler $handler): MessageHandler
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    /**
     * Handle the message filtering request.
     */
    public function handle(string $message): void
    {
        if ($this->nextHandler !== null) {
            $this->nextHandler->handle($message);
            return;
        }

        echo "Message reached end of chain without delivery." . PHP_EOL;
    }
}
