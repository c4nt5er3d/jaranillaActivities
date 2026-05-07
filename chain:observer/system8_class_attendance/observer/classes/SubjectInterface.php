<?php

/**
 * SubjectInterface
 * 
 * Interface for all subjects in the system.
 */
interface SubjectInterface
{
    public function attach(ObserverInterface $observer): void;
    public function detach(ObserverInterface $observer): void;
    public function notify(): void;
}
