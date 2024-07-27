<?php

// Mysql Connection 
$link = mysqli_connect ('localhost','root','');
if(!$link)
{
    die('Could not connect mysql' .mysqli_error());
}
echo 'connection ok';

?>