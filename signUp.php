<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Registration</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="signUp.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
         <h1> Create your account</h1>
       <div>
           
            <form onsubmit= "pageChange()" action="logIn.php" method="get">
                <label for="email">Email</label>
                <br>
                <i class="glyphicon glyphicon-envelope"></i>
                <input type="email" name ="email"  id="email" required>
                <br><br>
                
                <label for="fname">First Name </label>
                <br>
                <i class="glyphicon glyphicon-user"></i>
                <input type="text" name="fname" value=" " required>
                <br><br>
                
                <label for="lname"> Last Name </label>
                <br>
                <i class="glyphicon glyphicon-user"></i>
                <input type="text" name="lname"value =" " required>
                <br><br>
                
                <label for="pwd"> Password</label>
                <br>
                <i class="glyphicon glyphicon-cloud"></i>
                <input type="password" name="password" value = "" required>
                <br><br>
                
                <label for="pwd"> Retype Password</label>
                <br>
                <i class="glyphicon glyphicon-cloud"></i>
                <input type="password" name="password" value = "" required>
                <br><br>
               
              
                <input type="submit" value="Sign Up" />
             </form>  
            <script>
                function pageChange(){
                   alert("Registration Successfully!");
                }
            </script>
           
        </div>
        
    </body>
</html>
