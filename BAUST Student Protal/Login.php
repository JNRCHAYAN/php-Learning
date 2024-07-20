<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bgg" src="BaustLogo.png" alt="BAUST">
    <img class="bg" src="2.JPG" alt="BAUST">
    <br>
    <br>
    <h1>Bangladesh Army University Science and Technology</h1>
    <br>
    <h2>Login</h2>
    <br>
    <form action="Login.php" method="post">
        <input type="text" name="Uname" id ="username" placeholder="Enter Your Username">
        <input type="password" name="passrd" id ="password" placeholder="Enter Your Password">
        <button class="btnsig">Login Now</button>   
    </form>
    <br>
    <form name="f1" method="post" action="index.html">
        <button  class="btn" >Back</button>
    </form>
    
</body>
</html>

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
    if($row->password == $passrd )
    {
        echo "I am chayan" ;
        echo "</br>";
    }
    
   // echo "{$row->Name} : {$row->Department} : {$row->ID} : {$row->Sex} : {$row->Address}";
   // echo "</br>";
}


?>