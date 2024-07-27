<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Styling</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="from_body">
        <div class="heading">
            <h2 >Sign Up</h2>
            <p>It's free and only takes a miunte</p>
        </div>
       
        <form action="#" >
            <div>
                <label for="First_name">First Name</label>
                <br>
                <input type="text" name="First_name" id="text">
            </div>
            <div>
                <label for="LastName">Last Name</label>
                <br>
                <input type="text" name="LastName" id="LastName">
            </div>
            <div>
                <label for="Email">Email</label>
                <br>
                <input type="email" name="Email" id="Email">
            </div>
            <div>
                <label for="password">Password</label>
                <br>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <label for="confirmPassword">ConfirmPassword</label>
                <br>
                <input type="password" name="confirmPassword" id="confirmPassword">
            </div>
            <br>
            <div>
                <input type="submit" class="btn" name="susbmit"  value="Register"/> 
            </div>
        </form>
        <p>By Clicking the Sign Up button.You agree to our <a href="#">Terms & condition  </a>and <a href="#">Privacy Policy</a> 
       </p>
    </div>
    <div>
    <h4>Already have an account? <a href="#">Login Here</a></h4>
    </div>
</body>
</html>
<?php

include '02_Connection.php';

if(isset($_POST['submit']))
{
    $fname = $_POST['First_name'];
    $lname = $_POST['LastName'];
    $Emal = $_POST['Email'];
    $pssword = $_POST['password'];
    $cnfirmPassword = $_POST['confirmPassword'];

   $insertdb = " INSERT INTO  `myfrom`.`userlist` (`FirstName`, `LastName`, `Email`, `Password`, `ConfirmPassword`) 
   VALUES ('$fname','$lname','$Emal',' $pssword','$cnfirmPassword') " ;

  $res = mysqli_query( $con , $insertdb);

}

if($res)
{
    ?>
    <script>
        alert('Data Store on DBMS');
    </script>
    <?php
}

else
{

    ?>
    <script>
        alert('**** Data Not Store on DBMS');
    </script>
    <?php
}

?>
