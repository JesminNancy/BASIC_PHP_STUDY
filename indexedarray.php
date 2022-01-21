<?php

$names = array("Jesmin", "Akther", "Nancy", "Radifa", "Ripon");

echo "<pre>";
print_r($names);

$names[5] = "Bodiuzzaman";

echo "<pre>";
print_r($names);

echo $names[3]. "<br>";

$arraylength = count($names);

echo  $arraylength . "<br>";

echo "<ol>";
for($i = 0; $i<$arraylength; $i++){
    echo  "<li>" . $names[$i] . "</li>" ;
}

echo "<ol>";

?>