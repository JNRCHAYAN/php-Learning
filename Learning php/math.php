<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Html Table</h2>
    <?php
    $apples = $_POST['apples'];
    $pears = $_POST['Pears'];

    $totalf = $apples + $pears;
    $diff = $apples - $pears;
    $reverdiff = -$diff ;

    ?>
    <table border="1">
        <tr>
           <th>Description</th>
           <th>Amount Entered</th>
        </tr>
    <?php
    echo "<tr><td>The Number of apples</td><td>$apples</td></tr>";
    echo "<tr><td>The Number of pears</td><td>$pears</td></tr>";
    echo "<tr><td>The total number of apples</td><td>$totalf</td></tr>";
    echo "<tr><td>The total difference Number of apples</td><td>$diff</td></tr>";
    echo "<tr><td>The total reverdiff Number of apples</td><td>$reverdiff</td></tr>";
    ?>


</body>
</html>