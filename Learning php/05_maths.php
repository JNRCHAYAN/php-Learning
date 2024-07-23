<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>HTML Table</h3>
    <form action="math.php" method="post">
        <table>
            <tr align="left">
               <th>Description</th>
               <th>Amount Entered</th>
            </tr>

            <tr>
                <td>Number of apples : </td>
                <td><input type="text" name="apples" size="2"></td>
            </tr>
            <tr>
                <td>Number of Pears</td>
                <td><input type="text" name="Pears" size="2"></td>
            </tr>
        </table>
        <p>
            <input type="submit" value="Submit Information">
        </p>
    </form>
</body>
</html>
