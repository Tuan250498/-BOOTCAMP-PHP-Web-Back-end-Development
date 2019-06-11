<?php
include_once(dirname(__FILE__) . '/../Animal_interface_Edible/Fruits.php');

class Apple extends Fruit
{
    public function howToEat()
    {
        return "Apple could be slided";
    }
}