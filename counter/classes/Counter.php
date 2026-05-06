<?php

/**
 * Counter is a simple example of the Singleton design pattern.
 *
 * Goal: Ensure only ONE instance of this counter exists during the session
 * to provide a consistent global state across all pages.
 */
class Counter
{
    /**
     * Holds the single instance of this class.
     */
    private static ?Counter $instance = null;

    /**
     * Stores the count value.
     */
    private int $count = 0;

    /**
     * Constructor is private to prevent direct instantiation.
     * We use sessions to persist the state across page loads.
     */
    private function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION['singleton_counter'])) {
            $this->count = (int)$_SESSION['singleton_counter'];
        }
    }

    /**
     * Prevent cloning.
     */
    private function __clone()
    {
    }

    /**
     * Prevent unserialize.
     */
    public function __wakeup(): void
    {
        throw new \Exception('Cannot unserialize a Singleton.');
    }

    /**
     * Global access point to get the one and only instance.
     */
    public static function getInstance(): Counter
    {
        if (self::$instance === null) {
            self::$instance = new Counter();
        }

        return self::$instance;
    }

    /**
     * Increments the shared count and syncs with the session.
     */
    public function increment(): void
    {
        $this->count++;
        $_SESSION['singleton_counter'] = $this->count;
    }

    /**
     * Returns the current shared count.
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Resets the counter state.
     */
    public function reset(): void
    {
        $this->count = 0;
        $_SESSION['singleton_counter'] = $this->count;
    }
}
