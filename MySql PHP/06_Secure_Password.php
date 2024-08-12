<!-- Apply Blowfish Hasing Algorithms in PHP  -->

<?php
$pas = "chayan";
$strong_Pass = password_hash($pas,PASSWORD_BCRYPT);
echo $strong_Pass;
?>