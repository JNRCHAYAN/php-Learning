<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Successfully Submit</h3>
    <?php
    $firstname = $_POST['firstName'];
    $position = $_POST['position'];
    $Address = $_POST['address'];
    $Gender = $_POST['Gender'];
    
    echo "Cograculation" .$firstname ." for your promotion to  ".$position;
    echo" <br>";
    echo" <br>";
    echo "Your Address : " . $Address;
    echo" <br>";
    echo" <br>";
    echo "Your Gender : " . $Gender;
    ?>
</body>
</html>