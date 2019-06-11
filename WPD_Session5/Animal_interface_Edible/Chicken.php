<?php
include_once(dirname( __FILE__ ) . '/../Animal_interface_Edible/Animal.php');
include_once(dirname( __FILE__ ) . '/../Animal_interface_Edible/Edible.php');


class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
        return "Chicken: cluck-cluck!";
    }

    public function howToEat()
    {
        return "could be fried";
    }
}