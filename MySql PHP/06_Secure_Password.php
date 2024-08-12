<!-- Apply Blowfish Hasing Algorithms in PHP  -->

<?php
$pas = "chayan";
$option = ['cost'=> 12];  // It's mean how many time needs to create a password with this algotithm 

// $strong_Pass = password_hash($pas,PASSWORD_BCRYPT);
$strong_Pass = password_hash($pas,PASSWORD_BCRYPT,$option);
echo $strong_Pass;

$pass_Chack = password_verify($pas,$strong_Pass);
echo "<br>";
echo $pass_Chack;

?>