<?php

$a = 6;

/* if ($a == 5) {
  echo "Yes, It's Equal";
} else {
  echo " Oo No It's Not Equal";
} */

echo ($a == 5) ? "Yes, It's Equal" : "Oo No It's Not Equal";

echo "<br>";

$user = "";

$age = 25;

/* if ($age > 18) {
  $user = "Admin";
} else {
  $user = "Guest";
} */

$user = ($age > 18) ? "Admin" : "Guest"; // (Condition) ? Result1 : Result2

echo "$user";