<?php

$personArray1 = array('Effy', 'Katie', 'Emily', 'Pandora');
echo implode(",", $personArray1); 
echo "<br>";



$personArray2 = ['Effy', 'Katie', 'Emily', 'Pandora'];
echo implode(",", $personArray2); 
echo "<br>";


$personArray3 = array(
	'person1'=>'Effy', 
	'person2'=>'Katie', 
	'person3'=>'Emily', 
	'person4'=>'Pandora');
echo implode(",", $personArray3); 
echo "<br>";


$personArray4 = [
	'person1'=>'Effy', 
	'person2'=>'Katie', 
	'person3'=>'Emily', 
	'person4'=>'Pandora'];
echo implode(",", $personArray4); 
echo "<br>";


//$personArray5 = array('key'=>'value' , 'key'=>'value', 'key' =>'value');