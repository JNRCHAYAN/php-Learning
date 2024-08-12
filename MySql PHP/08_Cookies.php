<?php

// ** Set Cookie ****
// setcookie('mylife' , 'chayan');
setcookie('mylife' , 'chayan', time()+600);
// setcookie(name,value,expire,path,domain,secure,httponly);   Cookie basic staucture **must be use name and value


// ** Read Cookie
echo $_COOKIE['mylife'];

// ** Update Cookie 
setcookie('mylife' , 'Roni', time()+600);


// ** Read Cookie
echo $_COOKIE['mylife'];

// ** Delete Cookie
setcookie('mylife','NULL', time()-600);  // when we can use negative time then the cookie is delete 



?>