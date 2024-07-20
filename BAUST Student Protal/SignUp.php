<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bgg" src="BaustLogo.png" alt="BAUST">
    <img class="bg" src="2.JPG" alt="BAUST">
    <br>
    <br>
    <h1>Bangladesh Army University Science and Technology</h1>
    <br>
    <h2>Student Registration From</h2>
    <br>
    <form action="Login.php" method="post">
        <input type="text" name="Fullname" id ="fullname" placeholder="Enter Your Full Name">
        <input type="text" name="Username" id ="username" placeholder="Enter Your Username">
        <input type="email" name="email" id="email" placeholder="Enter Your Email">
        <input type="password" name="password" id ="password" placeholder="Enter Your Password">
        <input type="text" name="age" id="age"placeholder="Enter Your Age">
        <input type="text" name="gender" id="gender"placeholder= "Enter Your Gender">
        <input type="number" name="number" id="number" placeholder="Enter your number">
        <textarea name="desc" id="desc" cols="30 " rows="10" placeholder="Enter Your Address"></textarea>
        <button class="btnsig">Create Account</button>   
    </form>
    <br>
    <form name="f1" method="post" action="index.html">
        <button  class="btn" >Back</button>
    </form>
    
</body>
</html>