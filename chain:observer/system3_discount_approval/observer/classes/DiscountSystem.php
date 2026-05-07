<?php

require_once __DIR__ . '/SubjectInterface.php';
require_once __DIR__ . '/ObserverInterface.php';

/**
 * Class DiscountSystem
 * Concrete Subject that notifies observers about discount updates.
 */
class DiscountSystem implements SubjectInterface
{
    private array $observers = [];
    private float $discountValue = 0.0;

    public function attach(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(ObserverInterface $observer): void
    {
        $this->observers = array_filter($this->observers, fn($o) => $o !== $observer);
    }

    public function notify(): void
    {
        $message = "New discount value set to: {$this->discountValue}%";
        foreach ($this->observers as $observer) {
            $observer->update($message);
        }
    }

    public function updateDiscount(float $value): void
    {
        $this->discountValue = $value;
        $this->notify();
    }
}
