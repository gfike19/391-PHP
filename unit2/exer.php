<?php

$stack = new SplStack();
$str = "12345";

for($i = 0; $i < strlen($str); $i++) {
    $stack->push(substr($str, $i, 1));
}

$stack->rewind();
echo "The numbers placed into the stack were 1234<br>";
echo "The numbers as removed from the stack are: ";

while($stack->valid()) {
    echo $stack->current(), PHP_EOL;$stack->next();
}
?>