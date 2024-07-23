<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Field Validation Php File</title>
</head>
<body>
    <h1>Field Validation Php File</h1>

    <?php
    $name = $_POST['firstName'];
    $address = $_POST['address'];

    if(empty($name) || empty($address))
    {
        echo "Please fill all the Data";
        exit;
    }
    else
    {
        echo "Your Name : ".$name;
        echo "<br>";
        echo "Your Address : ".$address;
        echo "<br>";
    }
    
   
    ?>
</body>
</html>
