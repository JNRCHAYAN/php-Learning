<?php
$str = "This is a string";
echo $str;
$lenght = strlen($str);
echo "<br>";
echo "The string lenght is : " . $lenght ." , Add more concatenation using . ";
echo "<br>";
echo "The number of words string  is : " . str_word_count($str) ;
echo "<br>";
echo "The reversed string  is : " . strrev($str) ;

echo "<br>";
echo "The Search for is in this string  is : " . strpos($str,"is") ;

echo "<br>";
echo "The replaced string  is  : " . str_replace("is","at",$str) ;

?>