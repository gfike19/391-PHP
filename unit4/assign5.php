<?php

function binarySearch($arr, $val, $low, $high, $middle, $len)
{   
    // below line is for testing purposes
    echo "<p>Low is currently: " . $low . "<br>High is currently: " . $high . "<br>Middle is currently: " . $middle . "</p>";

    if ($val == $arr[$middle]) {
        echo "The part number was found at index " . $middle . "<br>";
        echo $val . " is in stock";
    return;
    } else {
        if ($high > $len + 1 and $val != $arr[$middle]) {
            echo $val . " is not in stock<br>";
            return;
        }

        if ($low < 0 and $val != $arr[$middle]) {
            echo $val . " is not in stock<br>";
            return;
        }

        if ($val == $arr[$middle]) {
            echo "The part number was found at index " . $middle . "<br>";
            echo $val . " is in stock";
        return;
        }
        // while ($high != $middle and $low != $middle) {

            if ($val > $arr[$middle]) {
                $low = $middle + 0;
                $middle = findMiddle($low, $high);
                binarySearch($arr, $val, $low, $high, $middle, $len);
            }
            if ($val < $arr[$middle]) {
                $high = $middle + 0;
                $middle = findMiddle($low, $high);
                binarySearch($arr, $val, $low, $high, $middle, $len);
            }
        //}
    }
}

function findMiddle($low, $high)
{
    return $low + intdiv(($high - 1), 2);
}

$partNumbers = array(1065, 1095, 1075, 1055, 1056, 1090, 1098, 1088, 1097, 1078);
$part1 = $_POST["part1"];
$part2 = $_POST["part2"];
sort($partNumbers);
$len = sizeof($partNumbers) - 1;
$middle = findMiddle(0, $len);
binarySearch($partNumbers, $part1, 0, $len, $middle, $len);
binarySearch($partNumbers, $part2, 0, $len, $middle, $len);
