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

