<?php

// String can write inside single quote or double quote
// double code can understand variale but single quote can't.
$name = 'Effy';

$greeting = 'Hello {$name}';
var_dump($greeting);

echo '<br/>';

// $greeging2 = "Hello {$name}";
$greeging2 = "Hello $name";
var_dump($greeging2);
echo '<br/>';

echo 'Effy says "hello world"';
echo '<br/>';
echo "Effy says 'hello world'";
echo '<br/>';
echo "Effy says \"hello world\"";



echo '<hr>';

// String Concatenating

$firstName = 'Effy';
$lastName = 'Stonem';

echo $firstName.' '.$lastName;
echo '<br>';
echo "{$firstName} {$lastName}";
?>