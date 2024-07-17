<?php
    $server ="localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect ($server,$username,$password);
    if(!$con)
    {
        die("Connect to this database failed due to". mysqli_connect_error());
    }
    // echo "Success connting to the db";
    $sql =INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('100', 'chayan', '24', 'Male', 'rchayan57@gmail.com', '01723193226', 'Saidpur, Nilphoamri', current_timestamp());


?>