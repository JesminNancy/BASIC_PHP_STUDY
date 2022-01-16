<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dynamic Content</title>
</head>

<body>

  <form action="" method="POST">

    Enter Your Fav Color : <input type="text" name="favcolor">
    <input type="submit" value="Check Now" name="submit">

  </form>

  <?php

  if (isset($_POST['submit'])) {

    $favColor = $_POST['favcolor'];

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
        echo "Sorry I am not sure about your fav color";
    }
  }

  ?>

</body>

</html>