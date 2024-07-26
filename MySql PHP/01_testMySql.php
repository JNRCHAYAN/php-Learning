<?php

// Mysql Connection 
$link = mysqli_connect ('localhost','root','');
if(!$link)
{
    die('Could not connect mysql' .mysql_error());
}
echo 'connection ok';

?>