<?php
$id = $_POST['Student_id'];
$name = $_POST['Student_Name'];

class display
{
    public function take_value($sid,$sname)
    {
        echo "Strudent id : " .$sid;
        echo "<br>";
        echo "Student Name : " .$sname;
    }
}

    $s = new display();
    $s->take_value($id,$name);



?>