<?php

$favColor = "green";

switch ($favColor) {

  case "blue":
    echo 'Your fav color is Blue';
    break;
  case "red":
    echo 'Your fav color is Red';
    break;
  case "green":
    echo 'Your fav color is Green';
    break;
  case "yellow":
    echo 'Your fav color is Yellow';
    break;
  default:
    echo "Sorry I am not sure to your fav color";
}

echo "<br>";

?>

<?php

$marks = 59;

switch ($marks) {
  case ($marks >= 80 && $marks <= 100):
    echo "You got A+";
    break;
  case ($marks >= 70 && $marks <= 79):
    echo "You got A";
    break;
  case ($marks >= 60 && $marks <= 69):
    echo "You got A-";
    break;
  case ($marks >= 50 && $marks <= 59):
    echo "You got B";
    break;
  case ($marks >= 40 && $marks <= 49):
    echo "You got C";
    break;
  case ($marks >= 33 && $marks <= 39):
    echo "You got D";
    break;
  case ($marks >= 0 && $marks <= 32):
    echo "You got F";
    break;
  default:
    echo "You are failed";
}

?>