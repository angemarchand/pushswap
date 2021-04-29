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

function pushSwap(array &$la, array &$lb)
{
    $itteration = [];
    while (!empty($la)) {
        pb($la, $lb);
        array_push($itteration, 'pb');
        // echo "bjr \n";
    }
    while (!empty($lb)) {
        $tmp = $lb[0];
        $index = 0;
        for ($i = 0; $i < count($lb); $i++) {
            if ($lb[$i] > $tmp) {
                $tmp = $lb[$i];
                $index = $i;
            }
        }
        if ($index < count($lb) / 2) {
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
    }
    return $itteration;
}
// $la = [8, 2, 3, 5, 3, 4, 1, 18, 23, 2, 35, 12, 9, 20, 30, 38, 14, 10, 11, 40, 34];
// $lb = [];
// pushSwap($la, $lb);
// var_dump($la);

$la = [];
$lb = [];

$arg = array_shift($argv);
$la = $argv;
$list = implode(" ", pushSwap(($la), $lb));
echo $list ."\n";



