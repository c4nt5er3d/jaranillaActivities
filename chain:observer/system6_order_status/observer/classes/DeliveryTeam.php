<?php

/**
 * DeliveryTeam
 * Observer that receives order status updates.
 */
class DeliveryTeam implements ObserverInterface
{
    public function update(string $message): void
    {
        echo "Delivery Team: Received notification - {$message}" . PHP_EOL;
    }
}
