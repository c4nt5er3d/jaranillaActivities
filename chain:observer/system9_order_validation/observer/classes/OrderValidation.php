<?php

require_once __DIR__ . '/SubjectInterface.php';
require_once __DIR__ . '/ObserverInterface.php';

/**
 * OrderValidation
 * 
 * The Subject that notifies systems when an order is validated.
 */
class OrderValidation implements SubjectInterface
{
    private array $observers = [];
    private string $lastValidatedOrder = '';

    public function attach(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(ObserverInterface $observer): void
    {
        $this->observers = array_filter($this->observers, function ($obs) use ($observer) {
            return $obs !== $observer;
        });
    }

    public function validateOrder(string $orderId): void
    {
        echo "OrderValidation: Order {$orderId} has passed all validations." . PHP_EOL;
        $this->lastValidatedOrder = $orderId;
        $this->notify();
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->lastValidatedOrder);
        }
    }
}
