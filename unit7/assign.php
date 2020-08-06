<?php

$xml = simplexml_load_file("studentGrades.xml") or die("Error: Cannot create object");
$studentArr = [];

foreach($xml->children() as $students) {
    array_push($studentArr, (int)$students->grade);
  }

  $avg = array_sum($studentArr)/count($studentArr);
  $lowest = min($studentArr);
  $highest = max($studentArr);

  echo "The lowest grade was: ".$lowest."<br>The highest grade was: ".$highest."<br>The average was: ".$avg;
?>