<?php
include '02_Connection.php';

$ag = $_GET['age'];

$deletq = "DELETE FROM `st` WHERE age =$ag" ;

$qery = mysqli_query( $con , $deletq);


header('location:03_show_data.php');



?>