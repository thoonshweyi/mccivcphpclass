<?php

//indexed array
$personArray1 = array('Effy', 'Katie', 'Emily', 'Pandora');
echo $personArray1[2]."<br>"; //will display Effy

//associative array
$personArray2 = array(
	'person1'=>'Effy', 
	'person2'=>'Katie', 
	'person3'=>'Emily', 
	'person4'=>'Pandora');

echo $personArray2['person2']."<br>"; //will display Katie