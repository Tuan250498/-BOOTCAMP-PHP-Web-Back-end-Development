<?php


class rectangle
{
    public $width;
    public $height;
    public function __construct($width,$height)
    {
        $this->width=$width;
        $this->height=$height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function getArea(){
        return ($this->width*$this->height);
    }
    public function getPerimeter(){
        return (($this->width+$this->height)*2);
    }
}