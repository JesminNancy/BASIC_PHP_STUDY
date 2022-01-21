<?php

$students = array("Jesmin", "Akther", "Nancy", "Radifa", "Ripon", "Anika");

// sort($students);

rsort($students);

echo "<ol>";
foreach($students as $names){
    echo  "<li>" . $names . "</li>" ;
}

echo "<ol>";

?>