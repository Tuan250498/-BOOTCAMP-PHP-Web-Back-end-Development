<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["number"];
    function move()
    {
        global $num;
        if ($num < 10 && $num >= 0) {
            Switch ($num) {
                case 0:
                    $num = "zero";
                break;
                case 1:
                    $num = "one";
                    break;
                case 2:
                    $num = "two";
                    break;
                case 3:
                    $num = "three";
                    break;
                case 4:
                    $num = "four";
                    break;
                case 5:
                    $num = "five";
                    break;
                case 6:
                    $num = "six";
                    break;
                case 7:
                    $num = "seven";
                    break;
                case 8:
                    $num = "eight";
                    break;
                case 9:
                    $num = "nice";
                    break;
                default:
                    echo "out of ability";
            }
            return $num;

        }
        if ($num < 20 && $num >= 10) {
            $donvi =  $num%10;
            Switch ($donvi) {
                case 0:
                    $num = "ten";
                    break;
                case 1:
                    $num = "eleven";
                    break;
                case 2:
                    $num = "twelfth";
                    break;
                case 3:
                    $num = "thirteen";
                    break;
                case 4:
                    $num = "fourteen";
                    break;
                case 5:
                    $num = "fifteen";
                    break;
                case 6:
                    $num = "sixteen";
                    break;
                case 7:
                    $num = "seventeen";
                    break;
                case 8:
                    $num = "eighteen";
                    break;
                case 9:
                    $num = "nineteen";
                    break;
            }
            return $num;
        }
//        if($num>=20 && $num<100){
//            $chuc = math.floor($num/10);
//            Switch($chuc){
//                case 2:
//                    $chucDS = "twenty";
//                    break;
//                case 3:
//                    $chucDS = "thirty";
//                    break;
//                case 4:
//                    $chucDS = "fourty";
//                    break;
//                case 5:
//                    $chucDS = "fifty";
//                    break;
//                case 6:
//                    $chucDS = "sixty";
//                    break;
//                case 7:
//                    $chucDS = "seventy";
//                    break;
//                case 8:
//                    $chucDS = "eighty";
//                    break;
//                case 9:
//                    $chucDS = "ninety";
//                    break;
//            }
////            $donviDS = $num%10;
////            Switch ($donviDS) {
////                case 1:
////                    $donviDS = "eleven";
////                    break;
////                case 2:
////                    $donviDS = "twelfth";
////                    break;
////                case 3:
////                    $donviDS = "thirteen";
////                    break;
////                case 4:
////                    $donviDS = "fourteen";
////                    break;
////                case 5:
////                    $donviDS = "fifteen";
////                    break;
////                case 6:
////                    $donviDS = "sixteen";
////                    break;
////                case 7:
////                    $donviDS = "seventeen";
////                    break;
////                case 8:
////                    $donviDS = "eighteen";
////                    break;
////                case 9:
////                    $donviDS = "nineteen";
////                    break;
////            }
//            return $chucDS."-".$donviDS;
//        }


    }

    echo move();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<form method="post">
    <input type="text" name="number" placeholder="Nhap so can doc">
    <input type="submit" id="submit" value="Read">
</form>
</body>
</html>