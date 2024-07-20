<?php
$id = $_POST['Student_id'];
$name =$_POST['Student_Name'];
$age =$_POST['age'];
$dep =$_POST['Department'];
$add =$_POST['address'];
$sex =$_POST['sex'];

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