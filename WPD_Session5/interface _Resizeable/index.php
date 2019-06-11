<?php
include "php-shape/Shape.php";
include "Resizeable.php";
include "Colorable.php";
include "php-shape/Circle.php";
include "php-shape/Rectangle.php";
include "php-shape/Square.php";
$shape[0]=new Circle('Circle',10);
$shape[1]=new Rectangle('Rectangle',10,5);
$shape[2]=new Square('Square',10);
foreach ($shape as $value) {
    echo $value->getName(). " is area: ".$value->calculateArea();
    echo "<br/>";
    $size=rand(1,100);
    echo "Size up is: $size".'%'."<br/>";
    $value->resize($size);
    echo $value->getName()." new is area: ".$value->calculateArea();
    echo "<br/>";
    if ($value instanceof Colorable){
        echo $value->getName().": ".$value->howToColor()."<br/>";
    }

}
?>