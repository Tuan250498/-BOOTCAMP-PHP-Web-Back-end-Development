<?php
function minArray($arr){
    $min = $arr[0];
    for( $i=1;$i<count($arr);$i++){
        if($arr[$i]<$min){
            $min=$arr[$i];
                  }
    }
    return $min;
}
$arr1=[3, 5, 1, 8, -3, 7, 8];
echo minArray($arr1);
?>