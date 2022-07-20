<?php

//integers
$integer = 1;
var_dump($integer);
echo ' is a ',gettype($integer),'<br>';

//float or double
$float = 1.1000001;
var_dump($float);
echo ' is a ',gettype($float),'<br>';

//string
$string = "Text sentence";
var_dump($string);
echo ' is a ',gettype($string),'<br>';

//boolean
$boolean = TRUE;
var_dump($boolean);
echo ' is a ',gettype($boolean),'<br>';

//array
$colors = array("Red", "Green", "Blue");
var_dump($colors);
echo ' is a ',gettype($colors),'<br>';

//class
class greeting{
    // properties
    public $str = "Hello Mates!";    
    // methods
    function show_greeting(){
        return $this->str;
    }
}
$greeting = new greeting();
var_dump($greeting);
echo ' is a ',gettype($greeting),'<br>';

//null
$null = NULL;
var_dump($null);
echo ' is a ',gettype($null),'<br>';

$handle = fopen("06_variables.php", "r");
var_dump($handle);
echo ' is a ',gettype($handle),'<br>';
