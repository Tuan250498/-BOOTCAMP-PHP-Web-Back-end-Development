<?php
include_once(dirname( __FILE__ ) . '/../Animal_interface_Edible/Animal.php');

class Tiger extends Animal
{
    public function makeSound()
    {
        return "Tiger: roarrrrrrr!";
    }
}