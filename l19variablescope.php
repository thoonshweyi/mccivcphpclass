<?php
    $name = 'Effy';
    
    function displayName(){
        $name = 'Branton';
        echo $name . '<br/>';
    }
    displayName();
    echo $name .'<br/>';


    function getName(){
        global $name;
        return $name;
    }
    echo getName();

?>