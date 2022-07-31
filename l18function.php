<?php

    // *function without return value
    // function add($a,$b){
    //     echo $a + $b;
    // }
    // add(2,5);


    // *function with return value
    // function multiply($a,$b){
    //     return $a * $b;
    // }
    // $result = multiply(5,6);
    // echo $result;

    // *Default Argument
    function subtract($a,$b = 5){
        return $a - $b;
    }
    $result = subtract(30);
    echo $result;

?>