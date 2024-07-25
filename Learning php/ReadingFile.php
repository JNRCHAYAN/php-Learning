<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading File</title>
</head>
<body>
    
    <?php
    $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

    $filename =  $DOCUMENT_ROOT. 'data/'.'citiy.txt';

    $lines_in_file = count(file($filename));

    $fp = fopen($filename, 'r'); // Opems the file for reading

    for($ii=1; $ii<= $lines_in_file; $ii++)
    {
        $line = fgets($fp);
        $city = trim($line);
        print 'city: '.$city. '<br>';
    }
    fclose($fp);

    ?>

</body>
</html>