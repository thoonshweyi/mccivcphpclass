<?php

$movies = [
	"batman"=>9,
	"superman" =>7,
	"spiderman" => 5,
	"ironman" => 6
];

//sort by key
ksort($movies);

echo "<pre>";
print_r($movies);
echo "</pre>";

//sort by value
arsort($movies);

echo "<pre>";
print_r($movies);
echo "</pre>";