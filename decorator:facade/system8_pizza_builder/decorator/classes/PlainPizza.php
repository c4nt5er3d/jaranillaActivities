<?php
class PlainPizza implements Pizza {
    public function getDescription(): string {
        return "Plain Pizza";
    }
    public function getCost(): float {
        return 50.0;
    }
}
