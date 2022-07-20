<?php

$message = "test";

echo "<p>This is a sentence</p>";
echo "<p>This is a sentence</p>";
echo "<p>This is a $message message</p>";
echo '<p>This is a $message message</p>';
echo "<p>This is a \$message message</p>";


$a = 'Hello';
$$a = 'World';

echo "$a $Hello";
