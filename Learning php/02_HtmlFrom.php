<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML FROM</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h3>What's is your name</h3>
    <form action="03_submit_from.php" method="post">
        <label for="name">Name</label>
        <br>
        <input type="text" name="firstName" size="30">
        <br>
        <br>
        <label for="position">Position</label>
        <br>
        <select name="position" id="postion">
            <option value="Administration">Administration</option>
            <option value="Faculty">Faculty</option>
            <option value="Staff">Staff</option>
        </select>
        <br>
        <br>
        <label for="Address">Address</label>
        <br>
        <textarea name="address" id="address" cols="50" rows="7"></textarea>
        <br>
        <br>
        <label for="Gender">Gender</label>
        <br>
        <input type="radio" name="Gender"  value="Male" > Male
        <input type="radio" name="Gender" value="Female" > Female
        <br><br>
        <br>
        <label for="Degrees">Degrees</label>
        <input type="checkbox" name="BSC" value="BSC">BSC
        <input type="checkbox" name="MSC" value="MSC">MSC
        <input type="checkbox" name="Phd" value="Phd">Phd
        <br>
        <br>
        <br>

        <input type="submit" name="submit" id="submit" value="submit information">
        <br>

    </form>
</body>
</html>