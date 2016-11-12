<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="signUp.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <h1>Sign In</h1>
          <div>
           
            <form onsubmit="pageChange()" action="home.php" method="get">
                <label for="email">Email</label>
                <br>
                <i class="glyphicon glyphicon-envelope"></i>
                <input type="email" name ="email"  id="email" required>
                <br><br>
                <label for="pwd"> Password</label>
                <br>
                <i class="glyphicon glyphicon-cloud"></i>
                <input type="password" name="password" value = "" required>
                <br><br>
                <input type="submit" value="Sign In">
             </form>   
        </div>
        <script>
                function pageChange(){
                   alert("Welcome to FriendNPU!");
                }
         </script>
    </body>
</html>
