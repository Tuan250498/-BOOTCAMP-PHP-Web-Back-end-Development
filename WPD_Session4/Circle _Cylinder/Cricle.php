<?php
class Cricle{
    public $name;
    public $radius;
    public $color;
    public function __construct($name,$radius,$color)
    {
        $this->name=$name;
        $this->color=$color;
        $this->radius=$radius;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function calculateArea(){
        return pi()*pow($this->radius,2);
    }
    public  function calculatePerimeter(){
        return pi()*$this->radius*2;
    }
    public function Display(){
        return "Tên: ".$this->name."<br>"."Màu: ".$this->color."<br>"."Bán Kính: ".$this->radius."<br>"."Diện tích $this->name: ".$this->calculateArea()."<br>"."Chu vi $this->name: ".$this->calculatePerimeter();
    }
}