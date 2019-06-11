<?php
include_once(dirname(__FILE__) . '/../Animal_interface_Edible/Fruits.php');

class Orange extends Fruit
{

    public function howToEat()
    {
        return "Orange could be juiced";
    }
}