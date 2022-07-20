<?php

    $numbers = [1,7,2,6,9,5];
    sort($numbers); //can sort number & string
    print_r($numbers);


    $movies = [
        'batman' => 9,
        'superman' => 7,
        'spiderman' => 5,
        'ironman' => 6
    ];

    // sort array (ascending) acording to key
    ksort($movies);
    print_r($movies);

    echo "<br/>";

    // sort array (ascending) acording to value
    asort($movies);
    print_r($movies);

    echo "<br/>";

    // sort array (descending) acording to value
    arsort($movies);
    print_r($movies);


?>