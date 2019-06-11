<?php
include "rectangle.php";

$Rectangle = new rectangle(10,20);
echo 'width: '.$Rectangle->getwidth();
echo "<br>";
echo 'height: '.$Rectangle->getheight();
echo "<br>";
echo 'Area: '.$Rectangle->getArea();
echo "<br>";
echo 'Perimeter: '.$Rectangle->getPerimeter();
?>
