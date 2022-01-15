<?php

$a = 50;
$b = 30;
$c = 10;
// AND Operators

if ($a > $b && $a > $c) {
  echo "A";
} elseif ($b > $a && $b > $c) {
  echo $b;
} else {
  echo $c;
}
echo "<br>";

// OR Operators

$x = 10;
$y = 20;
$z = 10;

if ($x == $y || $x == $z) {
  echo "true";
} else {
  echo "false";
}