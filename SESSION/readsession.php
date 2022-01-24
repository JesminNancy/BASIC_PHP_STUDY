<?php

session_start();

if(isset($_SESSION['username'])){

echo "My name is " .$_SESSION['username'] . "and My age is" . $_SESSION['age'] ;
}else{
    echo "No username set";
}
?>



