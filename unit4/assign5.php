<?php

$partNumbers = array(1065, 1095, 1075, 1055, 1056, 1090, 1098, 1088, 1097, 1078);
$part1 = $_POST["part1"];
$part2 = $_POST["part2"];
sort($partNumbers);

function binarySearch($arr, $val, $low, $high, $middle, $pos)
{
    if ($val == $arr[$middle]) {
        echo "The part number was found at index " . $middle . "<br>";
        echo $arr[$middle] . " is in stock";
    } else {

        if ($val < $arr[$middle]) {
            $pos = $middle - 1;
        }

        if ($val > $arr[$middle]) {
            $pos = $middle + 1;
        }

        while ($pos != $low and $pos != $high) {
            
        }
    }
}

$high = sizeof($arr);
$low = 0;
$pos = null;
$middle = $low + intdiv(($high - 1), 2);
