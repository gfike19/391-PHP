<?php

$studentIds = array(6501, 9503, 7557, 5535, 5601, 9001, 9888, 8801, 9767, 7815);

function sortArrayAsc($array)
{
    if (count($array) < 2) {
        return $array;
    }
    $left = $right = array();
    reset($array);
    $pivotKey = key($array);
    $pivot = array_shift($array);
    foreach ($array as $k => $v) {
        if ($v < $pivot) {
            $left[$k] = $v;
        } else {
            $right[$k] = $v;
        }
    }
    return array_merge(sortArrayAsc($left), array($pivotKey => $pivot), sortArrayAsc($right));
}

function sortArrayDes($array)
{
    if (count($array) < 2) {
        return $array;
    }
    $left = $right = array();
    reset($array);
    $pivotKey = key($array);
    $pivot = array_shift($array);
    foreach ($array as $k => $v) {
        if ($v < $pivot) {
            $left[$k] = $v;
        } else {
            $right[$k] = $v;
        }
    }
    return array_merge(sortArrayDes($right), array($pivotKey => $pivot), sortArrayDes($left));
}

function printArray($array)
{
    $asc = sortArrayAsc($array);
    $dsc = sortArrayDes($array);

    echo "Quicksort Descending<br>";
    foreach ($dsc as &$id) {
        echo $id . "<br>";
    }

    echo "Quicksort Ascending<br>";
    foreach ($asc as &$id) {
        echo $id . "<br>";
    }
}

printArray($studentIds);