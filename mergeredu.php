<?php

function arrayUnion($arr1, $arr2){
        $merge = array_merge($arr1, $arr2);
        echo "<pre>";
        print_r($merge);
        
        $result = array_unique($merge);
        echo "<pre>";
        print_r($result);
}

$arr1 = array('red', 'green', 'blue', 'yellow');
$arr2 = array('black', 'blue', 'red', 'orange');

arrayUnion($arr1, $arr2);

?> 