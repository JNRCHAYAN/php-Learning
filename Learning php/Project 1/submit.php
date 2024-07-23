<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You Data</title>
    <link rel="stylesheet" href="myst.css">
</head>
<body>
    <div class="mainsubmit">
        <h1>Thanks For fill up this from</h1>
        <p>------------------------------</p>
        <h3><i>Your Information here :</i> </h3>
    <?php
    $firstname =$_POST['FirstName'];
    $LastName =$_POST['LastName'];
    $email =$_POST['email'];
    $phone =$_POST['number'];
    $FullAddress =$_POST['FullAddress'];
    $city =$_POST['city'];

    if(empty($firstname) ||empty( $LastName) || empty($email) || empty($phone) || empty($FullAddress) ||  empty($city) )
    {
        echo "Please Fill all the details";

    }
    else
    {
   
    $fullname = $firstname . " " .$LastName;

    echo "Your Full Name : " .$fullname;
    echo "<br>";
    echo "Your Email     : ". $email;
     echo "<br>";
    echo "Your Phone     : ". $phone;
     echo "<br>";
    echo "Your City     : ". $city;
     echo "<br>";
    echo "Your Address     : ". $FullAddress;
     echo "<br>";
    } 
    ?>
         
  
</div>
</body>
</html>