<?php
include_once "Point2D.php";
include_once "Point3D.php";
include_once "MoveablePoint.php";

$point2d= new Point2D(2,3);
$point2d->setX(4);
$point2d->setY(5);
echo $point2d->Display()."<br>";

$point3d=new Point3D(4,5,8);
echo $point3d->Display();
$move= new MoveablePoint(4,5,8,9);
echo $move->move();