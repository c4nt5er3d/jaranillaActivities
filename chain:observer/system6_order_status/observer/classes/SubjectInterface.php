<?php

/**
 * SubjectInterface
 * Interface for the Order subject.
 */
interface SubjectInterface
{
    public function attach(ObserverInterface $observer): void;
    public function detach(ObserverInterface $observer): void;
    public function notify(string $message): void;
}
