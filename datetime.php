<?php

echo date("y/m/d");
echo "<br>";
echo date("y-m-d");
echo "<br>";
echo date("y.m.d");
echo "<br>";
echo date("w");
echo "<br>";
echo date(" d l M") . "<br>";
echo date(" h:i:sA");

$timezone = date_default_timezone_get();

echo "The current server time zone is:" . $timezone . "<br>";

date_default_timezone_set('Asia/Dhaka');
echo date(" d l M") . "<br>";
echo date(" h:i:sA");
?> 