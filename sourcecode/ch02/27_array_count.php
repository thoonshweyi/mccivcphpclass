<?php

$fruits = ["Apple", "Mango", "Banana"];

$count = count($fruits); //3

for($i = 0; $i< $count; $i++){
	echo ($i+1).".".$fruits[$i]."<br>";
}