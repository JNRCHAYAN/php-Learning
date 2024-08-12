<!-- Apply Blowfish Hasing Algorithms in PHP  -->

<?php
$pas = "chayan";
$strong_Pass = password_hash($pas,PASSWORD_BCRYPT);
echo $strong_Pass;

$pass_Chack = password_verify($pas,$strong_Pass);
echo "<br>";
echo $pass_Chack;

?>