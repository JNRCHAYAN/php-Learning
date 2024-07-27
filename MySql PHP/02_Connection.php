<?php
$username = "root";
$password = "";
$server = 'localhost';
$db = 'myfrom';

$con = mysqli_connect($server,$username,$password,$db);

if($con)
{
    echo "Connection Successful";
}
else
{
 echo "No Connection";
 die("No connection" .mysqli_connect_error());

}


?>