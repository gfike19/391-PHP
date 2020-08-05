<?php

$xml = simplexml_load_file("studentGrades.xml") or die("Error: Cannot create object");
$total = 0;
$studentArr = [];
foreach($xml->children() as $students) {
    $total += $students->grade;
    array_push($studentArr, $students->grade);
  }
  $numStudents = $xml->count();

  $avg = $total / $numStudents;
  $lowest = min($studentArr);
  $highest = max($studentArr);

  echo "The lowest grade was: ".$lowest."<br>The highest grade was: ".$highest."<br>The average was: ".$avg;
?>