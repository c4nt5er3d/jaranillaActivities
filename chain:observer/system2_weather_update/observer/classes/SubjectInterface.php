<?php

/**
 * Interface SubjectInterface
 * Interface for the Subject in the Weather Update system.
 */
interface SubjectInterface
{
    public function attach(ObserverInterface $observer): void;
    public function detach(ObserverInterface $observer): void;
    public function notify(): void;
}
