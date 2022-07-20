<?php

$person1 = array("Elizabeth", "Stonem");
$person2 = array("Katie", "Fitch");
$person3 = array("Emily", "Fitch");

$girls = array($person1, $person2, $person3);

echo $girls[0][0]; //will display Elizabeth
echo "<br>";

$people = [	
	"boys"=>[
		['fname'=>"Freddie", 'lname'=>"McClair"],
		['fname'=>"James", 'lname'=>"Cook"]
	],
	"girls"=>[
		['fname'=>"Effy", 'lname'=>"Stonem"],
		['fname'=>"Katie", 'lname'=>"Fitch"]
	]
];

echo $people["boys"][0]["fname"]; //will display Freddie