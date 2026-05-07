<?php
class PizzaFacade {
    private PlainPizza $plainPizza;
    private Cheese $cheese;
    private Pepperoni $pepperoni;
    private Mushroom $mushroom;

    public function __construct() {
        $this->plainPizza = new PlainPizza();
        $this->cheese = new Cheese();
        $this->pepperoni = new Pepperoni();
        $this->mushroom = new Mushroom();
    }

    public function makePepperoniMushroomPizza(): void {
        echo "--- Making Pepperoni Mushroom Pizza ---" . PHP_EOL;
        $this->plainPizza->prepare();
        $this->cheese->add();
        $this->pepperoni->add();
        $this->mushroom->add();
        echo "Pizza Ready!" . PHP_EOL;
    }
}
