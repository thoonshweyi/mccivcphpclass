<?php
$people = array("p1"=>"Emily","p2"=> "Katie","p3"=> "Pandora");

if (in_array("Effy", $people)){
	echo "Match found";
}else{
	echo "Match not found";
}
echo "<br>";

//return boolean (true or false)
$test =  in_array("Katie", $people); 
var_dump($test); 

//return int/string/false
$test2 =  array_search("Katie", $people);
var_dump($test2);