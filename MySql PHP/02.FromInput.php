<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Styling</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="from_body">
        <div class="heading">
            <h2 >Sign Up</h2>
            <p>It's free and only takes a miunte</p>
        </div>
       
        <form action="09_Position.html" >
            <div>
                <label for="Firstname">First Name</label>
                <br>
                <input type="text" name="text" id="text">
            </div>
            <div>
                <label for="LastName">Last Name</label>
                <br>
                <input type="text" name="LastName" id="LastName">
            </div>
            <div>
                <label for="Email">Email</label>
                <br>
                <input type="email" name="Email" id="Email">
            </div>
            <div>
                <label for="password">Password</label>
                <br>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <label for="confirmPassword">ConfirmPassword</label>
                <br>
                <input type="password" name="confirmPassword" id="confirmPassword">
            </div>
            <br>
            <div>
                <button class="btn">Sign Up</button>
            </div>
        </form>
        <p>By Clicking the Sign Up button.You agree to our <a href="#">Terms & condition  </a>and <a href="#">Privacy Policy</a> 
       </p>
    </div>
    <div>
    <h4>Already have an account? <a href="#">Login Here</a></h4>
    </div>
</body>
</html>