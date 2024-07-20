<?php

$server ="localhost";
$username = "root";
$password = "";
$con = new  mysqli($server,$username,$password,'studentdb');

if(!$con)
{
    die("Connect to this database failed due to". mysqli_connect_error());
}
else
{
    echo "Conniction Successfully";
}
echo "</br>";
$r ='SELECT *From student';
$result = $con->query($r);

while($row = $result->fetch_object())
{
    if($row->ID == "104")
    {
        echo "I am chayan" ;
        echo "</br>";
    }
    
   // echo "{$row->Name} : {$row->Department} : {$row->ID} : {$row->Sex} : {$row->Address}";
   // echo "</br>";
}


?>