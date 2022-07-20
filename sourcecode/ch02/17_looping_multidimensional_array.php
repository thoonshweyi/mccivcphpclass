<?php
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


foreach ($people as $person){
	foreach ($person as $member){
		foreach($member as $key => $value){
			echo "{$key} is {$value}.";
		}
		echo "<br>";
	}
}