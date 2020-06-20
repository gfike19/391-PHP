<?php

$myFriends =new SplDoublyLinkedList();
$myFriends->push("Fred 602-299-3300");
$myFriends->push("Ann 602-555-4949");
$myFriends->push("Grace 520-544-9898");
$myFriends->push("Sam 602-343-8723");
$myFriends->push("Dorothy 520-689-9745");
$myFriends->push("Susan 520-981-8745");
$myFriends->push("Bill 520-456-9823");
$myFriends->push("Mary 520-788-3457");

$myFriends->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);
for ($myFriends->rewind(); $myFriends->valid(); $myFriends->next()) {
    echo $myFriends->current()."<br>";
}
echo "<br>";

$myFriends->offsetUnset(6);
$myFriends->pop();
$myFriends->shift();

$myFriends->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);
for ($myFriends->rewind(); $myFriends->valid(); $myFriends->next()) {
    echo $myFriends->current()."<br>";
}

echo "<br>";
echo "I have ".sizeof($myFriends)." friends in my list";
echo "<br>";

$myFriends->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);
for ($myFriends->rewind(); $myFriends->valid(); $myFriends->next()) {
    if (gettype(strpos($myFriends->current(), "Fred")) == "integer"){
        echo "I found Fred!";
    }
}
echo "<br>";
echo "The list doesn't contain Fred";
?>