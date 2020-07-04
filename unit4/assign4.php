<?php

$partNumbers = array(1065, 1095, 1075, 1055, 1056, 1090, 1098, 1088, 1097, 1078);
$part1 = $_POST["part1"];
$part2 = $_POST["part2"];

function sequentialSearch($arr, $val)
{
    $flag = 0;
    for ($i = 0; $i < sizeof($arr); $i++) {
        if ($val == $arr[$i]) {
            echo "The part number " . $val . " was found at index " . $i;
            echo "<br>" . $val . " is in stock<br>";
            $flag += $val;
            break;
        }
        if ($i + 1 == sizeof($arr) and $val != $arr[$i]) {
            echo $val . " is not in stock<br>";
            $flag -= 1;
        }
    }
    return $flag;
}

sequentialSearch($partNumbers, $part1);
sequentialSearch($partNumbers, $part2);
