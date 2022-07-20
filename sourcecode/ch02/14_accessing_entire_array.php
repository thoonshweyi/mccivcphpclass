<?php

//indexed array
$girls = array('Effy', 'Katie', 'Emily', 'Pandora', 'JJ', 'Thomas');

foreach($girls as $girl){
	echo $girl." ";
}

/*
for($i = 0; $i < count($girls); $i++ ){
	echo $girls[$i]. ",";
}*/

/*
foreach ($girls as $key => $girl){
	echo "{$key}{$girl} <br>";
}*/

//associative array
echo "<br>";
$boys = array(
	'person1'=>'Freddie', 
	'person2'=>'Cook', 
	'person3'=>'JJ', 
	'person4'=>'Thomas');

foreach ($boys as $key => $value){
	echo "{$key} is {$value} <br>";
}
