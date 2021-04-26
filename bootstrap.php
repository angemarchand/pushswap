<?php
function swap_elem( Array & $array, int $index1, int $index2 ){

    $temp = $array[$index1];
    $array[$index1] = $array[$index2];
    $array[$index2] = $temp; 
  
}
// $array = [1, 2, 3, 4];
// $array2 = [3, 5, 3, 8, 9];
// swap_elem($array, 1, 2);
//var_dump($array);
// swap_elem($array2, 2, 4);
// var_dump($array2);

function bubble_sort_array(array &$array)
{
    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = 0; $j < count($array) - $i - 1; $j++){
            if ($array[$j] > $array[$j + 1]){
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;  
            }
        }
    }
    
}

// $array = [1, 3, 4, 2];
// bubble_sort_array($array);
// var_dump($array);
// 
// $array2 = [3, 5, 3, 8, 1];
// bubble_sort_array($array2);
// var_dump($array2);

function my_amazing_sorter ( Array & $array ){
    $i1= $array[0];
    $i2= $array[1];
    $temp = $array[0];
    $array[0] = $array[1];
    $array[1] = $temp; 

    $tab = array_shift($array);
    $lastElem = array_pop($array);
    $arr =array_push($array, $tab);
    $toFirstElem = array_unshift($array, $lastElem);
    var_dump($lastElem);

}
// $array = [15, 8, 42, 4, 16, 23];
// my_amazing_sorter($array);
// var_dump($array);

function sort_numbers ( Array & $array1 , Array & $array2 ){

    $firstElem = array_shift($array1);
    $arr = array_push($array2, $firstElem);

    $i1 = $array1[0];
    $i2 = $array1[1];
    $temp = $array1[0];
    $array1[0] = $array1[1];
    $array1[1] = $temp;
    
    $firstElem1 = array_shift($array1);
    $arr1 = array_push($array1, $firstElem1);

    $i1 = $array1[0];
    $i2 = $array1[1];
    $temp = $array1[0];
    $array1[0] = $array1[1];
    $array1[1] = $temp;

    $firstList = array_shift($array2);
    $arrlist = array_push($array1, $firstElem);


}

$array1 = [15, 8, 42, 4, 16, 23]; $array2=[];
sort_numbers ($array1, $array2);

// var_dump($array1);
// var_dump($array2);

