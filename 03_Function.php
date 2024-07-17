<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function print5()
    {
        echo "<br>";
        echo "Five";
    }
    print5();
    echo "<br>";
    function printnumner($num)
    {
        echo "Your number is : ";
        echo $num;
    }
    printnumner(45);
    ?>
</body>
</html>