<?php

$studentIds = array(6501, 9503, 7557, 5535, 5601, 9001, 9888, 8801, 9767, 7815);
echo "Student IDs unsorted<br>";
foreach($studentIds as &$id) {
    echo $id."<br>";
}

function quicksort($array) {
    if(count($array) < 2) {
        return $array;
    }
    $left = $right = array();
    reset($array);
    $pivotKey = key($array);
    $pivot = array_shift($array);
    foreach($array as $k => $v) {
        if($v < $pivot) {
            $left[$k] = $v;
        } else {
            $right[$k] = $v;
        }
    }
    return array_merge(quicksort($left),array($pivotKey => $pivot), quicksort($right));
}

$studentIds = quicksort($studentIds);
echo "Student IDs sorted<br>";
foreach($studentIds as &$id) {
    echo $id."<br>";
}
?>