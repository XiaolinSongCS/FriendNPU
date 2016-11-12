<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
    
    <head>
        
        <title>Friend NPU</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="welcome.js">
    </script>
    </head>
    
    <body>
        <div class="logo">
           <img src="./pictures/logo2.JPG" alt="logo">
        </div>
        
        <div class="outLink">
            <form onclick="pageChange()">
          <button type="button" class="btn btn-success">Log Out</button>
          </form>
        </div>
        
        <div class="btn-group">
        <button type="button" class="btn btn-primary">XiaolinSong</button>
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
        <li><a href="#">Setting</a></li>
        <li><a href="#">History</a></li>
        <li><a href="#">Post Event</a></li>
        
        </ul>
        </div>
            
       
     
        
        <div class="welcome">
           
            <img id ="welcomeImg" src="./pictures/welcome.jpg" alt="welcome" width="450" height="550">
        
            <div class="center">
                <form>
                <input type="text" name="searchLine">
                <button type="button" class="btn btn-success">Search</button>
                </form>
            </div>
            
        
        
        </div>


        
        <div class="desc">           
            <h2>Host an Event</h2>
            <h3>When host a event</h3>
            <h4>in your account page,click"Post Event"button,
            fill up the information about your event,
            wait for someone to join and enjoy it!</h4>
            <hr>
            <h2>Attend an Event</h2>
            <h3> When attend a event</h3>
            <h4>type in keyword, search for the event,
            or to see our coming events below
            click the attend button and enjoy it!</h4>                  
        </div>
        
        <div class ="contents">
            
        <div class="img">
            <a target="_blank" href="./pictures/img_fjords.jpg">
            <img src="./pictures/img_fjords.jpg" alt="Trolltunga Norway" width="300" height="200">
            </a>
            <div class="desc">Event A</div>
        </div>

        <div class="img">
            <a target="_blank" href="./pictures/img_forest.jpg">
            <img src="./pictures/img_forest.jpg" alt="Forest" width="600" height="400" >
            </a>
            <div class="desc">Event B</div>
        </div>

        <div class="img">
            <a target="_blank" href="./pictures/img_lights.jpg">
            <img src="./pictures/img_lights.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">Event C</div>
        </div>

        <div class="img">
            <a target="_blank" href="./pictures/img_mountains.jpg">
            <img src="./pictures/img_mountains.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Event D</div>
        </div>
        
        <div class="img">
            <a target="_blank" href="./pictures/img_mountains.jpg">
            <img src="./pictures/yoga.jpg" alt="yogas" width="600" height="400">
            </a>
            <div class="desc">Event E</div>
        </div>

        </div>
        
        <div class="footer">
            Copyright @FriendNPU.com
        </div>
</body>
</html>
