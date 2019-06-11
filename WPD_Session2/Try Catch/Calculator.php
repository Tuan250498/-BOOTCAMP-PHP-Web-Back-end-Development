<?php


class Calculator
{
    public function calc($x,$y)
    {
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $num1=$_POST["number1"];
            $num2 =$_POST["number2"];
            $calculation = $_POST["pheptinh"];
            Switch($calculation){
                case "+":
                    $Ketqua=$num1+$num2;
                    break;
                case "-":
                    $Ketqua=$num1-$num2;
                    break;
                case "*":
                    $Ketqua =$num1*$num2;
                    break;
                case "/":
                    $Ketqua = $num1/$num2;
                    break;
            }
        }
    }
}