<?php
 $server ="localhost";
 $username = "root";
 $password = "";
 $con = mysqli_connect ($server,$username,$password);

 if(!$con)
 {
     die("Connect to this database failed due to". mysqli_connect_error());
 }

 $fname = $_POST['First_name'];
 $lname = $_POST['LastName'];
 $Emal = $_POST['Email'];
 $pssword = $_POST['password'];
 $cnfirmPassword = $_POST['confirmPassword'];


$sql =  " INSERT INTO userlist(FirstName,LastName,Email,Password,ConfirmPassword) 
   VALUES ('$fname','$lname','$Emal',' $pssword','$cnfirmPassword') " ;


    if($con->query($sql)==true)
    {
        $insert = true;
        echo "Successfully Inserted";
    }
    else
    {
        echo "Error : $sql <br> $con->error";
    }

    //$con ->close();
    ?>