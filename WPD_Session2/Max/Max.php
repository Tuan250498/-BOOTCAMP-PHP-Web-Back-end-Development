<?php
 function Maxnumber($arr)
 {
     $max = $arr[0][0];
     for ($i = 0; $i < count($arr); $i++) {
         for ($j = 0; $j < count($arr[$i]); $j++) {
             if ($max < $arr[$i][$j]) {
                 $max = $arr[$i][$j];
             }
         }
     }
     return $max;

 }
$arr1 = [[7, 12, 6,89, 9, 20, 56 ],
    [360, 310, 310, 330, 313, 375, 456, 111, 256],
    [350, 340, 356, 330, 321],
    [630, 340, 570, 635, 434, 255, 298]];
echo Maxnumber($arr1);
?>