<?php

$members = ["Freddie", "JJ", "Emily", "Katie", "Effy", "Cook"];

$girls = array_splice($members, 2,3, "Maxxie");

print_r($girls);
echo "<br>";
print_r($members); 