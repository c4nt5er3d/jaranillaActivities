<?php

/**
 * Abstract class DiscountHandler
 * Base handler for the Discount Approval system.
 */
abstract class DiscountHandler
{
    /**
     * @var DiscountHandler|null Next handler in the chain.
     */
    protected ?DiscountHandler $nextHandler = null;

    /**
     * Set the next handler in the chain.
     */
    public function setNext(DiscountHandler $handler): DiscountHandler
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    /**
     * Handle the discount approval request.
     */
    public function handle(float $percentage): void
    {
        if ($this->nextHandler !== null) {
            $this->nextHandler->handle($percentage);
            return;
        }

        echo "No handler could process the discount of {$percentage}%." . PHP_EOL;
    }
}
