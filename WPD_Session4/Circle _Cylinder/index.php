<?php
include_once "Cricle.php";
include_once "Cylinder.php";

$cricle = new Cricle('hinh chu nhat',2,'red');
echo $cricle->Display();
$cylinder = new Cylinder('hinh tru',2,'red',4);
echo $cylinder->Display();