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
    // Face Some error for chackbox 
    // $BSC = $_POST['BSC'];
    // $MSC = $_POST['MSC'];
    // $Phd = $_POST['Phd'];

    // Slove this error we can use if else condtion 
    if (isset( $_POST['BSC']))
    {
        $BSC = $_POST['BSC'];
    }
    else
    {
        $BSC = ""; 
    }
    if (isset( $_POST['MSC']))
    {
        $MSC = $_POST['MSC'];
    }
    else
    {
        $MSC = ""; 
    }
    if (isset( $_POST['Phd']))
    {
        $Phd = $_POST['Phd'];
    }
    else
    {
        $Phd = ""; 
    }
    
    echo "Cograculation" .$firstname ." for your promotion to  ".$position;
    echo" <br>";
    echo" <br>";
    echo "Your Address : " . $Address;
    echo" <br>";
    echo" <br>";
    echo "Your Gender : " . $Gender;
    echo" <br>";
    echo" <br>";
    echo "Your Degrees : " .$BSC ." ".$MSC ." ". $Phd;
    ?>
</body>
</html>