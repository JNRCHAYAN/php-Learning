<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="mainbody">
    <?php
    $firstname =$_POST['FirstName'];
    $LastName =$_POST['LastName'];
    $email =$_POST['email'];
    $phone =$_POST['number'];
    $FullAddress =$_POST['FullAddress'];
    $city =$_POST['city'];

  
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
    ?>
</div>
</body>
</html>