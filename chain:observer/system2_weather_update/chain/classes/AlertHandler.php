<?php

/**
 * Abstract class AlertHandler
 * Base handler for the Weather Alert system.
 */
abstract class AlertHandler
{
    /**
     * @var AlertHandler|null Next handler in the chain.
     */
    protected ?AlertHandler $nextHandler = null;

    /**
     * Set the next handler in the chain.
     */
    public function setNext(AlertHandler $handler): AlertHandler
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    /**
     * Handle the alert request.
     */
    public function handle(string $riskLevel): void
    {
        if ($this->nextHandler !== null) {
            $this->nextHandler->handle($riskLevel);
            return;
        }

        echo "No handler could process the alert for risk level: {$riskLevel}" . PHP_EOL;
    }
}
