<?php

$students = array("Jesmin", "Akther", "Nancy", "Radifa", "Ripon", "Anika");

// Pop Push

array_pop($students);

echo "<pre>";
print_r($students);

/* echo "<ol>";
foreach($students as $names){
    echo  "<li>" . $names . "</li>" ;
}

echo "<ol>"; */

// Shift Unshift

array_push($students, "Rahim");

echo "<pre>";
print_r($students);

array_shift($students);

echo "<pre>";
print_r($students);

array_unshift($students, "Karim");

echo "<pre>";
print_r($students);

?>