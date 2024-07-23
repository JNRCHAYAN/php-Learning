<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pofit</title>
    <link rel="stylesheet" href="myst.css">
</head>
<body>
<div class="mainsubmit">
    <?php

    $amount = $_POST['Amount'];
    $Interest = $_POST['Interest_Rate'];

    if(empty( $amount) || empty( $Interest))
    {
        echo "<br>";
        echo "<h2>* Please fill the all details *</h2>";
    }
    else
    {
        echo "<h1>Mortgage Calclution</h1>";
        echo "<br>";

        $cla = ($Interest/100);
        $cla = $cla * $amount;
        echo "<h3>if you finance $".$amount ." at interest rate of ".$Interest. "%";
        echo "<br>";
        echo "<br>";
        echo "Your Monthly Payment would be $".$cla;
    }

    ?>

</div>
</body>
</html>