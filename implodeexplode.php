<?php

$colors = array('Red', 'Blue', 'Green');

echo "<pre>";
print_r($colors);

$result = implode(" ", $colors);

echo "My fav colors are:" . $result . " .";

$biodata = "My Name is Jesmin Akther Nancy";

$result = explode(" ", $biodata);

echo "<pre>";
print_r($result);

foreach($result as $val){
    echo $val;
}
?>