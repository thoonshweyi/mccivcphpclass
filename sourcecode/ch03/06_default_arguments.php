<?php

$a = add(5);
echo $a;

function add($x, $y = 5){
	return $x + $y;
}

// output will be 10
// what happen if you set defaut value to $x instead of $y?