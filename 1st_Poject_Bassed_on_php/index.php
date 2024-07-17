<?php
$insert = false;
    if(isset($_POST['name']))
    {
    $server ="localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect ($server,$username,$password);
    if(!$con)
    {
        die("Connect to this database failed due to". mysqli_connect_error());
    }
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $desc = $_POST['desc'];
    // echo "Success connting to the db";
    $sql = " INSERT INTO `us_trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', 
    '$age', '$gender', '$email', '$number', '$desc', current_timestamp())" ;
   // echo $sql;

    if($con->query($sql)==true)
    {
        $insert = true;
        //echo "Successfully Inserted";
    }
    else
    {
        echo "Error : $sql <br> $con->error";
    }

    $con ->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel From</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
</head>
<body>
    <img class="bg" src="baust.jpg" alt="BAUST">
   <div class = "Container">
    <h3>Welcome To BAUST US Trip form</h3>
    <br>
    <p>Enter your details  and submit this form to confirm your participation in the  trip</p>
    <?php
    if($insert== true)
    {   echo "<p class='Submitmsg'>Thanks for submitting your from. We are happy to see you joining use for the US Trip</p>"; } 
    ?>
    <form action="index.php" method="post">
        <input type="text" name="name" id ="name" placeholder="Enter your name">
        <input type="text" name="age" id="age"placeholder="Enter your age">
        <input type="text" name="gender" id="gender"placeholder= "Enter your gender">
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <input type="number" name="number" id="number" placeholder="Enter your number">
        <textarea name="desc" id="desc" cols="30 " rows="10" placeholder="Enter your full address"></textarea>
        <button class="btn">Submit</button>
        
    </form>
    
   </div>


   <script src="index.js"></script>

</body>
</html>
