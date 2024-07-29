<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>List of the user</h1>
        <h2 ><a class="back" href="02_FromInput.php">Back </a></h2>
      
        
          <div>
            <table>
                <thead><tr>
                    <th>Fast Name</th>
                    <th>Last Name</th>
                    <th>Email </th>
                    <th>Age </th>
                    <th>Password</th>
                    <th colspan="2">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    include '02_Connection.php';

                    $selectquery = "Select * from st";

                    $qery = mysqli_query( $con , $selectquery);

                    // $num =  mysqli_num_rows($qery);
                    // $res = mysqli_fetch_array($qery);  
                    // echo $res[1];  
                    while ($res = mysqli_fetch_array($qery))
                    {
                        // echo $res['namef'] . "<br>";
                        // echo $res['email'] . "<br>"; 
                      ?>      
                        <tr>
                        <td> <?php echo $res['namef']; ?></td>
                        <td> <?php echo $res['namel']; ?></td>
                        <td> <?php echo $res['email']; ?></td>
                        <td> <?php echo $res['age'] ;?></td>
                        <td> <?php echo $res['pass']; ?></td>
                        <!-- <td>   <a href="04_Edit_From.php" data-toggle="tooltip" data-placement="bottom" title="Update">
                            <i class="fa fa-edit" aria-hidden="true"></i>  </a></td> -->
                        <td>   <a href="04_Edit_From.php?age=<?php echo $res['age'] ?>" data-toggle="tooltip" data-placement="bottom" title="Update">
                            <i class="fa fa-edit" aria-hidden="true"></i>  </a></td>
                        <td> <a href="05_Delete.php?age=<?php echo $res['age'] ?> " data-toggle="tooltip" data-placement="bottom" title="Delete">
                        <i class="fa fa-trash" aria-hidden="true"></i>  </a> </td>
                     </tr>
                     <?php

                    }
                    ?>
               
            </tbody>
            </table>
          </div>  

    </div>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

</body>
</html>