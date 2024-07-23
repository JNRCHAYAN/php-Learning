<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>King Real Estate</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="mainbody">
        <h1>King Real Estate</h1> 
        <p>Please sign up our guest list and a representative will contact you soon</p>
        <div class="mainfrom">
        <form action="submit.php" method="post">
                <div>
                    <label for="FirstName">First Name</label>
                    <br>
                    <input type="text" name="FirstName" id="FirstName">
                </div>
                <div>
                    <label for="LastName">Last Name</label>
                    <br>
                    <input type="text" name="LastName" id="LastName">
                </div>
                <div class="contact">
                    <label for="contact information">Contact Information</label>
                    <input type="radio" name="phone" id="phone"> Phone 
                    <input type="radio" name="phone" id="email"> Email 
                  </div>
                   
                    <div>
                        <input type="text" name="contact " id="contact">
                    </div>
                     <div>
                        <label for="contact information">City Where you live</label>
                        <br>
                        <select name="city" id="city">
                            <option value="Saidpur">Saidpur</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Dhaka">Dhaka</option>
                        </select>

                     </div>     
              
                <div class="testbok">

                    <label for="FullAddress">FullAddress</label>
                    <textarea name="FullAddress" id="FullAddress" cols="50" rows="10"></textarea>
                </div>
                <div>
                 <button class="btn" value="submit">Submit</button>
                </div>
        </form>
        </div>
    </div>
   
</body>
</html>