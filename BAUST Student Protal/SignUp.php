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
    $fname = $_POST['name'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $number = $_POST['number'];
    $desc = $_POST['desc'];

    $sql = " INSERT INTO `bauststudent` . `student` (`fullname`, `username`, `email`, `password`, `age`, `gender`, `number`, `address`) 
    VALUES ('$fname', '$uname', '$email', ' $pass', '$age', '$gender', '$number', '$desc')";


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
<img class="bgg" src="BaustLogo.png" alt="BAUST">
<img class="bg" src="2.JPG" alt="BAUST">
   <div class = "Container">
    <h3>Bangladesh Army University Science and Technology</h3>
    <br>
    <p>Student Registration From</p>
    <?php
    if($insert== true)
    {   echo "<p class='Submitmsg'>SuccessFully Create Your Account</p>"; 
        
    } 
    ?>
     <form action="in.php" method="post">
        <input type="text" name="name" id ="name" placeholder="Enter Your Full Name">
        <input type="text" name="uname" id ="uname" placeholder="Enter Your Username">
        <input type="email" name="email" id="email" placeholder="Enter Your Email">
        <input type="password" name="pass" id ="pass" placeholder="Enter Your Password">
        <input type="text" name="age" id="age"placeholder="Enter Your Age">
        <input type="text" name="gender" id="gender"placeholder= "Enter Your Gender">
        <input type="number" name="number" id="number" placeholder="Enter your number">
        <textarea name="desc" id="desc" cols="30 " rows="10" placeholder="Enter Your Address"></textarea>
        <button class="btnsig">Create Account</button>   
    </form>
    <br>
    <form name="f1" method="post" action="Login.php">
        <button  class="btn" >Login</button>
    </form>
    <br>
    <form name="f1" method="post" action="index.html">
        <button  class="btn" >Back</button>
    </form> 

    
   </div>

  
 

</body>
</html>
