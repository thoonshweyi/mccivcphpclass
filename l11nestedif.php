<?php

$card = 2;
$suit = 'spade';

if($card == 2){
    if($suit == 'spade'){
        echo 'You have Big 2.';
    }else{
        echo 'You don\'t have Big 2.';
    }
}else{
    echo 'You don\'t have 2.';
}

// if($card == 2 && $suit == 'spade'){
//     echo 'You have Big 2.';
// }elseif($card == 2 && $suit != 'spade'){
//     echo 'You don\'t have Big 2.';
// }else{
//     echo 'You don\'t have 2.';
// }

?>