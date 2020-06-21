<?php

$words = $_POST["words"];
$stack = new SplStack();
$temp = str_split($words);

for($i = 0; $i < sizeof($temp); $i++){
    $stack->push($temp[$i]);
}

// $stack->bottom();
$stack->rewind();
while($stack->valid()){
    echo $stack->current();
    $stack->next();
}
?>