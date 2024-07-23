<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $today = date('Y-m-d');
    echo $today;
    echo" <br>";  
    echo" <br>";
    print  "Today date is $today";
    $time = date('h:g:s');
    print "<p>Today Time is $time</p>";

    $date_and_time = date('Y-m-d h:g:s');
    echo" <br>";
    echo  $date_and_time;
    ?>
</body>
</html>