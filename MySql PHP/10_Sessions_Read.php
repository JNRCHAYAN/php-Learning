<?php
session_start();

echo "Your Name : " .$_SESSION['username']. "<br>";

echo  "Your Age : " .$_SESSION['age'];

?>