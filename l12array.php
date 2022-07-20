<?php
    // 1.Indexed Array(with number index)
    // 2.Assiociative Array(with naming index)
    // index number start from zero

    // 1.Indexed Array
    $people = array('Effy','Emily','John','Anna','Richard');
    $fruits = ['Apple','Orange','Banana','Pineapple'];

    // -Array Output
    // whole array can't output with echo
    // print_r($people);        echo '<br/>';
    // var_dump($fruits);       echo '<br/>';
    // $text = implode(', ',$people); echo "$text <br/>";

    // $arrstr = serialize($fruits);  echo "$arrstr <br/>";
    // $strarr = unserialize($arrstr);  echo "$strarr <br/>";


        // echo $fruits[2];

    // 2.Associative Array
    $person = array(
        'name' => 'Effy',
        'age' => 18,
        'email' => 'effy@skins.co.uk',
        'city' => 'Bristol'
    );
        // echo $person['email'];


    // -Looping Array
    // for($i = 0; $i < count($people) ; $i++){
    //     echo "$people[$i] <br/>";
    // }

    // foreach($fruits as $fruit){
    //     echo "$fruit <br/>";
    // }

    // foreach($person as $key => $value){
    //     echo "key is $key, and value is $value. <br/>";
    // }

    // -Adding value to indexed array
        
        // $fruits[2] = 'Strawberry'; //overawrite if the index is already exist
        // $fruits[6] = 'Watermelon';     //overflow index will not error
        
        

    // -Adding value to associated array
        // $person['gender'] = 'female';

    // -Array Method
        // array_push(); //add to last index
        // array_push($people,'James');

        // array_pop(); //remove from last index
        // echo array_pop($people);

        // array_unshift(); //add to first index
        // array_unshift($people,'Bin');

        // array_shift(); //remove from first index
        // echo array_shift($people);

        // array_slice(arr, start, space); //cut value array
        // $selection = array_slice($people,1,3);
        // print_r($selection);

        // arr_splice(arr, start, space, replace value);
        // $replaced = array_splice($people,2,3,'Branton');
        // print_r($replaced);

        // in_array(searchvalue,arr)
        // *return true or faluse
        // $in = in_array('Effy',$people);
        // var_dump($in);

        // array_search(searchvalue,arr)
        // * return true/false and index
        // $search = array_search('Branton',$people);
        // var_dump($search);

    // print_r($people);
    // print_r($fruits);
    // print_r($person);


?>