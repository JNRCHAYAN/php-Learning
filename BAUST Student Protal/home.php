<?php
$unamee = $_POST['Uname'];
$passrd =$_POST['passrd'];

$server ="localhost";
$username = "root";
$password = "";
$con = new  mysqli($server,$username,$password,'bauststudent');

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

//echo "$uname";
while($row = $result->fetch_object())
{
    if($row->password == $passrd && $row->username == $unamee )
    {
        echo "I am chayan" ;
        echo "</br>";
    }
    
   // echo "{$row->Name} : {$row->Department} : {$row->ID} : {$row->Sex} : {$row->Address}";
   // echo "</br>";
}


?>