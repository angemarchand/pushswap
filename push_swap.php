<?php

function sa(Array &$la, Array &$lb){
    if(count($la)>= 2){
        $p = array_shift($la);
        $p2 = array_shift($la);
        array_unshift($la, $p);
        array_unshift($la, $p2);
    } else {
        return;
    }
}

function sb(Array &$la, Array &$lb){
    if (count($lb) >= 2) {
        $p1 = array_shift($lb);
        $p2 = array_shift($lb);
        array_unshift($lb, $p1);
        array_unshift($lb, $p2);
    } else {
        return;
    }
}

function sc(array &$la, array &$lb)
{
    sa($la, $lb);
    sb($la, $lb);
}

function pa(array &$la, array &$lb){
    if(!empty($lb)){
        $fisrtElem = array_shift($lb);
        array_unshift($la, $fisrtElem);
    } else {
        return;
    }
}

function pb(array &$la, array &$lb)
{
    if (!empty($la)) {
        $fisrtElem = array_shift($la);
        array_unshift($lb, $fisrtElem);
    }else{
        return;
    }
}


function ra(array &$la, array &$lb){
    $firstToLast = array_shift($la);
    array_push($la, $firstToLast);
}

function rb(array &$la, array &$lb){
    $firstToLast = array_shift($lb);
    array_push($lb, $firstToLast);
}

function rr(array &$la, array &$lb){
    ra($la, $lb);
    rb($la, $lb);
}

function rra(array &$la, array &$lb)
{
    $lastToFirst = array_pop($la);
    array_unshift($la, $lastToFirst);
}

function rrb(array &$la, array &$lb)
{
    $lastToFirst = array_pop($lb);
    array_unshift($lb, $lastToFirst);
}

function rrr(array &$la, array &$lb)
{
    rra($la, $lb);
    rrb($la, $lb);
}

function isArraySort(array &$la)
{
    for ($i = 0; $i <count($la)-1 ; $i++) {
        if ($la[$i] > $la[$i+1]){
            return false;
        }
    }return true;
}

function pushSwap(array &$la, array &$lb)
{
    $itteration = [];

    $b=0;
    $a=0;
    while(isArraySort($la) === false){
        while (!empty($la)) {
            pb($la, $lb);
            array_push($itteration, 'pb');
            $b++;
            $a--;

        }
    }
    while (!empty($lb)) {
        $tmp = $lb[0];
        $index = 0;
        $countedLb= $b;
        for ($i = 0; $i < $countedLb; $i++) {
            if ($lb[$i] > $tmp) {
                $tmp = $lb[$i];
                $index = $i;
            }
        }
        if ($index < $countedLb / 2) {
            while ($lb[0] != $tmp) {
                rb($la, $lb);
                array_push($itteration, 'rb');
            }
        } else {
            while ($lb[0] != $tmp) {
                rrb($la, $lb);
                array_push($itteration, 'rrb');
            }
        }
        pa($la, $lb);
        array_push($itteration, 'pa');
        $b--;
    }
    return $itteration;

}
// $la = [8, 2, 3, 5, 3, 4, 1, 18, 23, 2, 35, 12, 9, 20, 30, 38, 14, 10, 11, 40, 34];
// $lb = [];
// pushSwap($la, $lb);


$la = [];
$lb = [];





$arg = array_shift($argv);
$la = array_map('intval', $argv );
// for ($i = 0; $i < 5000; $i++) {
    // array_push($la, rand(-10, 10000));
// }
$list = implode(" ", pushSwap($la, $lb));
echo $list ."\n";





