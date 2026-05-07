<?php

/**
 * Order
 * The Subject that notifies observers when the order status changes.
 */
class Order implements SubjectInterface
{
    private array $observers = [];
    private string $order_id;

    public function __construct(string $order_id)
    {
        $this->order_id = $order_id;
    }

    public function attach(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(ObserverInterface $observer): void
    {
        $this->observers = array_filter($this->observers, fn($o) => $o !== $observer);
    }

    public function notify(string $message): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($message);
        }
    }

    /**
     * Change order status and notify observers.
     */
    public function setStatus(string $status): void
    {
        $message = "Order [{$this->order_id}] status changed to: {$status}";
        echo "Order System: Updating order {$this->order_id} status to {$status}..." . PHP_EOL;
        $this->notify($message);
    }
}
