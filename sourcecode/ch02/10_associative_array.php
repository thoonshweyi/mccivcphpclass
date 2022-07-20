<?php

//normal variables
$person1 = "Effy";
$person2 = "Katie";
$person3 = "Emily";
$person4 = "Pandora";


//array
$personArray = array(
	'person1'=>'Effy', 
	'person2'=>'Katie', 
	'person3'=>'Emily', 
	'person4'=>'Pandora');


echo $personArray['person4'];
echo "<br>";

echo implode(",", $personArray); 