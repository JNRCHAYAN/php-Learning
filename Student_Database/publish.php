<?php


 $server ="localhost";
 $username = "root";
 $password = "";
 $con = mysqli_connect ($server,$username,$password);

 if(!$con)
 {
     die("Connect to this database failed due to". mysqli_connect_error());
 }


$id = $_POST['Student_id'];
$name =$_POST['Student_Name'];
$age =$_POST['age'];
$dep =$_POST['Department'];
$add =$_POST['address'];
$sex =$_POST['sex'];
$sql =  "INSERT INTO `StudentDb`. `student` (`ID`, `Name`, `Age`, `Department`, `Address`, `Sex`) 
VALUES ('$id', '$name', '$age', '$dep', '$add', '$sex')";


    if($con->query($sql)==true)
    {
        $insert = true;
        echo "Successfully Inserted";
    }
    else
    {
        echo "Error : $sql <br> $con->error";
    }

    $con ->close();

    class display
{
    public function show_value($sid,$sname,$sage,$sdep,$sadd,$ssex)
    {
        echo "Student Id : " .$sid;
        echo "<br>";
        echo "Student Name : " .$sname;
        echo "<br>";
        echo "Student Age : " .$sage;
        echo "<br>";
        echo "Student Department : " .$sdep;
        echo "<br>";
        echo "Student Address : " .$sadd;
        echo "<br>";
        echo "Student Sex : " .$ssex;
        echo "<br>";
        
    }
}
$s = new display();
$s->show_value($id,$name,$age,$dep,$add,$sex);
    ?>