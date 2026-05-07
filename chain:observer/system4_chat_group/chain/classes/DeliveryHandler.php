<?php

require_once __DIR__ . '/MessageHandler.php';

/**
 * Class DeliveryHandler
 * Final step that delivers the message.
 */
class DeliveryHandler extends MessageHandler
{
    public function handle(string $message): void
    {
        echo "DeliveryHandler: Message delivered successfully: \"{$message}\"" . PHP_EOL;
        // No call to parent::handle() because this is the terminal handler.
    }
}
