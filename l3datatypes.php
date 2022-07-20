<?php

//int
$number = 1;
echo $number;
echo '<br/>';
var_dump($number);
echo '<hr/>';


//float
$pointnumber = 41.16;
echo $pointnumber;
echo '<br/>';
var_dump($pointnumber);
echo '<hr/>';

//string
$name = 'Thoon Shwe Yi Kyaw';
echo $name;
echo '<br/>';
var_dump($name);
echo '<hr/>';

//boolean
$isError = false;
echo $isError;
echo '<br/>';
var_dump($isError);
echo '<hr/>';

//array
$fruits = ['apple','orange','banana','kiwi','watermelon'];
//error
echo $fruits;
echo implode($fruits);
echo '<br/>';

var_dump($fruits);
echo '<br/>';

print_r($fruits);
echo '<hr/>';


// object
class User{
    public $name = "";
    function _construct($name){
        $this->name = $name;
    }
    public function show(){
        echo 'hello',$this->name;
    }
}
$john = new User("Mr.John");//error Mr.John ma paw lar
$john->show();



?>