<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You Data</title>
</head>
<body>
    <?php
    $firstname =$_POST['FirstName'];
    $LastName =$_POST['LastName'];
    $phone =$_POST['phone'];
    $email =$_POST['email'];
  

    $fullname = $firstname . " " .$LastName;

    echo "Your Full Name : " .$fullname;
    if($phone)
    {
        echo "Your Contact   : " .$phone;
    }
 

    ?>
</body>
</html>