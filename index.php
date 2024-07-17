<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My First Web Dev Code with PHP</h1>
    <?php
        echo "MY First php File";
    ?>
    <h1></h1>
    <?php
    echo "use echo for show any output";
    // Single link Comment
    /* Multline comment
     */

     // Variable

     $var1 = 35;
     $var2 = 44;
     echo "<br>";
     echo $var1;
     echo "<br>";
     echo $var2;
     echo "<br>";
     echo "<br>";
     // Operator in php
    //  Arithmetic Operator
    echo "The value of var1 + var2";
    echo "<br>";
    echo $var1 +$var2;
    echo "<br>";
    echo "The value of var1 - var2";
    echo "<br>";
    echo $var1 -$var2;
    echo "<br>";
    echo "The value of var1 * var2";
    echo "<br>";
    echo $var1 * $var2;
    echo "<br>";

    //  Assignment Operator
    $newvar = $var1;
    echo "<br>";
    echo " The Value of new variable = " ;
    echo $newvar;
    echo "<br>";
    $newvar *= 2;
    echo "<br>";
    echo " The Value of new variable = " ;
    echo $newvar;
    echo "<br>";
    // Others -=,+=,/=
    
    //  Comparison Operator
   // echo "<h1> Comparison Operator </h1";
    echo "<br>";
    echo "-> The value of 1==4 is ";
    echo var_dump (1==4);
    echo "<br>";

    echo "<br>";
    echo "-> The value of 1!=4 is ";
    echo var_dump (1!=4);
    echo "<br>";

    echo "<br>";
    echo "-> The value of 1>=4 is ";
    echo var_dump (1>=4);
    echo "<br>";

    echo "<br>";
    echo "-> The value of 1<=4 is ";
    echo var_dump (1<=4);
    echo "<br>";
    //  Increment/Decrement Operator
    echo $var1++;
    echo "<br>";
    echo $var2--;
    echo "<br>";
    echo  ++$var1;
    echo "<br>";
    echo  --$var2;
    echo "<br>";
    //  Logical Operator
    $myvar = (true and true);
    echo var_dump($myvar);
    echo "<br>";
    
    $myvar = (true or false);
    echo var_dump($myvar);
    echo "<br>";

    $myvar = (true xor true);
    echo var_dump($myvar);
    echo "<br>";
    ?>

<?php
//Data type in php
// 1.string
// 2.Integer 
// 3.Float
// 4.Boolean
// 5.Array 
// 6.Object

$var = "Thei is a string";
echo  var_dump($var);
echo "<br>";
$var = 67;
echo var_dump($var);
echo "<br>";
echo "<br>";
$var = 67.2;
echo var_dump($var);
echo "<br>";
echo "<br>";
$var = true;
echo var_dump($var);
echo "<br>";
?>
    
</body>
</html>
