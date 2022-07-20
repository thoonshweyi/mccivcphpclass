<?php

$person1_fname = "Elizabeth";
$person1_lname = "Stonem";
$person2_fname = "Katie";
$person2_lname = "Fitch";
$person3_fname = "Emily";
$person3_lname = "Fitch";

$person1 = array("Elizabeth", "Stonem");
$person2 = array("Katie", "Fitch");
$person3 = array("Emily", "Fitch");

$girls = array($person1, $person2, $person3);

echo "<pre>";
print_r($girls);
echo "</pre>";