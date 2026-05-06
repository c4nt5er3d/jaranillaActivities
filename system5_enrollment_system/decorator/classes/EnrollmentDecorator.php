<?php

/**
 * Abstract Class EnrollmentDecorator
 * Base decorator class that maintains a reference to an EnrollmentProcess object.
 * Forwards requests to the wrapped component.
 */
abstract class EnrollmentDecorator implements EnrollmentProcess {
    protected EnrollmentProcess $decoratedProcess;

    /**
     * EnrollmentDecorator constructor.
     * @param EnrollmentProcess $process The component to wrap.
     */
    public function __construct(EnrollmentProcess $process) {
        $this->decoratedProcess = $process;
    }

    /**
     * Delegates the enrollment action to the wrapped component.
     * @param string $name
     */
    public function enroll(string $name): void {
        $this->decoratedProcess->enroll($name);
    }
}
