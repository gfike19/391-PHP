<?php

function binarySearch($arr, $val, $low, $high) {

    if($low > $high) {
        echo $val." is not in stock.<br>";
        return -1;
    }
    $middle = findMiddle($low, $high);

    if($arr[$middle] == $val) {
        echo "The part number ".$val." was found at index ".$middle."<br>";
        echo $val." is in stock.<br>";
        return $middle;
    }
    return binarySearch($arr, $val, $middle + 1, $high);
}

function findMiddle($low, $high)
{
    return $low + intdiv(($high - 1), 2);
}

$partNumbers = array(1065, 1095, 1075, 1055, 1056, 1090, 1098, 1088, 1097, 1078);
$part1 = $_POST["part1"];
$part2 = $_POST["part2"];
sort($partNumbers);
$middle = findMiddle(0, sizeof($partNumbers) - 1);
binarySearch($partNumbers, $part1, 0, $middle);
binarySearch($partNumbers, $part2, 0, $middle);
