0<?php

$num = 6;

test();
test2();


function test(){	
	echo $num; //notice error
}

function test2(){	
	global $num;
	echo $num; //notice error
}

