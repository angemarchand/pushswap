<?php
function swap_elem( Array & $array, int $index1, int $index2 ){


    $temp = $array[$index1];
    $array[$index1] = $array[$index2];
    $array[$index2] = $temp; 

    // $var1 = 3;
    // $var2 = 2;
    // for ($i = 1; $i <= 10; $i++) {
        // $tableau1[$i] = rand(1, 100);
    // } 
  
}
$array = [1, 2, 3, 4];
$array2 = [3, 5, 3, 8, 9];
swap_elem($array, 1, 2);
//var_dump($array);
swap_elem($array2, 2, 4);
var_dump($array2);
