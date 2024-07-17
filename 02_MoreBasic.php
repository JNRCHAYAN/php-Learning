<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Learning</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border_box;
    }
.Container{
        max-width:80%;
        background-color: rgb(181, 181, 181);
        margin: auto;
        padding: 20px;

    }
</style>

<body>
 <div class="Container">
    <h1>This is a next file of php</h1>
<?php

    $age =34;
    //If Else
    if($age>34)
    {
        echo "Your age : ";
        echo $age;
        echo "<br>";
        echo "This is vaild codition";
        echo "<br>";
    }
    else if($age == 34)
    {
        
        echo "Your age : ";
        echo $age;
        echo "<br>";
        echo "Else if contion true";
        echo "<br>";

    }
    else
    {
        echo "THis is wrong";
    }
?>
<?php
// Array in php
 $language = array("C++","C","php");
 echo "How many element in my array : ";
 echo count($language);
 echo "<br>";
 echo $language[2];

 //Loops in php
 
 //While loop
 $a =0;
 echo "<br>";
 echo "The value of a : ";
 echo "<br>";
 while ($a <= 10) {
    echo $a;
    $a++;
    echo "<br>";
 }

 // Loops with array
 $a =0;
 echo "<br>";
 while ($a < 3) {
    echo $language[$a];
    $a++;
    echo "<br>";
 }

 // Do while loop
 echo "<br>";
 echo "Do While Loop";
 echo "<br>";
 $a =0;
 echo "<br>";
   do  {
    echo $language[$a];
    $a++;
    echo "<br>";
 } while ($a < 3);


?>
</div>
</body>
</html>