<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>King Real Estate</title>
   <link rel="stylesheet" href="myst.css"> 
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
                <div>
                    <label for="email">Email</label>
                    <br>
                    <input type="email" name="email" >
                </div>
                <div>
                    <label for="phone">Phone Number</label>
                    <br>
                    <input type="number" name="number" >
                </div>
                  
                     <div>
                        <label for="city">City Where you live</label>
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



    <div class="claculator">
        <h1>Mortgate claculator</h1> 
        <p>Please fill details to clacule mortgate</p>
        <div class="mainfrom">
        <form action="calculator.php" method="post">
                <div>
                    <label for="Amount">Amount</label>
                    <br>
                    <input type="number" name="Amount" id="Amount">
                </div>
                <div>
                    <label for="Interest Rate">Interest Rate</label>
                    <br>
                    <input type="number" name="Interest_Rate" id="Interest Rate">
                </div>
                <div>
                 <button class="btn" value="submit">Calculate Profit</button>
                </div>
        </form>
        </div>
    </div>
   
</body>
</html>