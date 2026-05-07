<?php

/**
 * Interface SubjectInterface
 * Defines the contract for the subject class.
 */
interface SubjectInterface
{
    /**
     * Attach an observer to the subject.
     */
    public function attach(ObserverInterface $observer): void;

    /**
     * Detach an observer from the subject.
     */
    public function detach(ObserverInterface $observer): void;

    /**
     * Notify all attached observers.
     */
    public function notify(): void;
}
