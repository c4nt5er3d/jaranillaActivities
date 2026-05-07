<?php

require_once __DIR__ . '/SubjectInterface.php';
require_once __DIR__ . '/ObserverInterface.php';

/**
 * Class WeatherStation
 * Concrete Subject that notifies observers about weather updates.
 */
class WeatherStation implements SubjectInterface
{
    private array $observers = [];
    private string $message = "";

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
        foreach ($this->observers as $observer) {
            $observer->update($this->message);
        }
    }

    public function setWeatherMessage(string $message): void
    {
        $this->message = $message;
        $this->notify();
    }
}
