<?php
class Cylinder extends Cricle{
    public $heigth;
    public function __construct($name, $radius, $color,$height)
    {
        parent::__construct($name, $radius, $color);
        $this->height=$height;
    }
    public function calculateArea(){
    return parent::calculateArea()*2+parent::calculatePerimeter()*$this->height;
    }
    public function calculateVolume(){
        return parent::calculateArea()*$this->height;
    }
    public function Display()
    {
        return "<br>"."Tên: ".$this->name."<br>"."Màu: ".$this->color."<br>"."Bán Kính: ".$this->radius."<br>"."Dien Tich $this->name: ".$this->calculateArea()."<br>"."Thể tích $this->name: ".$this->calculateVolume();
    }
}